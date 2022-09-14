<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password as PasswordRules;

class AuthenticationController extends Controller
{
    /**
     * Login user and create token
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        // Attempt to authenticate the user
        $request->authenticate();

        // @todo Define token abilities and scopes based on the requirements
        $token = $request->user()->createToken('auth-token', ['*']);

        return response()->json(
            [
                'status' => true,
                'user' => $request->user(),
                'token' => $token->plainTextToken
            ]
        );
    }

    /**
     * Register user
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', PasswordRules::defaults()],
        ]);

        $user = (new User())->newQuery()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // @todo Define token abilities and scopes based on the requirements
        $token = $user->createToken('auth-token', ['*']);

        return response()->json(
            [
                'status' => true,
                'token' => $token->plainTextToken,
                'user' => $user
            ]
        );
    }


    /**
     * Request a password reset link.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(Request $request): JsonResponse
    {
        // validate request
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // logout / revoke all tokens
        $request->user()->tokens()->delete();

        //@todo Change this function to sendResetLink on production
        $token = Password::createToken($request->user());

        // check if a token is created, return the token
        if ($token) {
            return response()->json(
                [
                    'status' => true,
                    'token' => $token
                ]
            );
        }
    }

    /**
     * Reset the password.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request): JsonResponse
    {
        // validate request
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', PasswordRules::default()],
        ]);

        // check if the token is valid and reset the password
        $status = Password::reset(

            $request->only('email', 'password', 'password_confirmation', 'token'),

            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                $user->tokens()->delete();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return response()->json([
                'status' => true,
                'message' => 'Password reset successfully'
            ]);
        }

        return response()->json([
            'message' => __($status)
        ], 500);

    }


    /**
     * Logout user (Revoke the token)
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(
            [
                'status' => true,
                'message' => 'Logged out successfully'
            ]
        );
    }

}
