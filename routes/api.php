<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthenticationController;
use App\Http\Controllers\Api\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/login', [AuthenticationController::class, 'login']);

Route::post('/auth/register', [AuthenticationController::class, 'register']);

Route::post('/auth/forgot-password', [AuthenticationController::class, 'forgotPassword']);

Route::post('/auth/reset-password', [AuthenticationController::class, 'resetPassword']);

Route::post('/auth/logout', [AuthenticationController::class, 'logout'])->middleware('auth:sanctum');

Route::resource('events', EventController::class)
    ->middleware('auth:sanctum')
    ->except(['create', 'edit']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

