# Welcome to API TEST

The application is built based on Laravel and Laravel Sanctum. The front end is created as a sample to test the
funcationality using AlpineJS and TailwindCSS

## How to install

Please follow the below steps to install and exectute the application.

1. Take a clone of the repository and make sure you have PHP 8+ version.
2. Open the clonned folder and Install composer `composer install`
3. Once the installation is complete. Run the command `composer threls-install`

After running the commands, the system will perform all the required configuration and you can start the application by
running `php artisan serve`

### Design

The application is built using Laravel Sanctum. The authentication is done using the simple approach of creating a
single controller to handle all the functionality.

The front end is created using AlpineJS and TailwindCSS. The front end is created as a sample to test the functionality

The password reset is implemented using the Laravel's default password reset core methods. 

Once the user go through the password reset flow, without sending the email, the token is sent thorugh the API.
And the user is redirected to the password reset page. The user can reset the password from there.


In an actual application, the email will be sent to the user with the front-end link and the user will be able to reset the password going through the same validation method.

For the event module, a single Controller is used as a resource controller and the API is based on the REST API concept.

#### What can be improved & updated
- Event / Actions and Notification emails must be added.
- 2FA can be added using the Laravel's default 2FA implementation.
- Additional validation can be added to the API.
- User token generation can be improved by adding role based access using the Sanctum Abilities functionality.


References

- https://laravel.com/docs/9.x/sanctum

- LoginRequest.php - https://github.com/laravel/breeze/blob/1.x/stubs/api/App/Http/Requests/Auth/LoginRequest.php

- AlpineJS - https://alpinejs.dev/
