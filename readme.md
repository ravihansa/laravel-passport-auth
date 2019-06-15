<p align="center">Laravel Passport Auth App</p>

## Laravel Passport?

Laravel already makes it easy to perform authentication via traditional login forms, but what about APIs? APIs typically use tokens to authenticate users and do not maintain session state between requests. Laravel makes API authentication a breeze using Laravel Passport, which provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server that is maintained by Andy Millington and Simon Hamp.
&nbsp;

## How to setup this application?

1) After cloning the application, you need to install it's dependencies,  
- cd laravel-passport-auth
- composer install
&nbsp;
&nbsp;
2) Then rename .env.example as .env and provide correct db details.
&nbsp;
&nbsp;
3) After Generate the application key using following command,  
- php artisan key:generate
&nbsp;
&nbsp;
4) Migrate the application using following command,
- php artisan migrate
&nbsp;
&nbsp;
5) Create the encryption keys needed to generate secure access tokens,
- php artisan passport:install
&nbsp;
&nbsp;
6) Finally run the application using following command,
- php artisan serve
&nbsp;

## How to create this application?

1) Create laravel project,  
- composer create-project --prefer-dist laravel/laravel laravel-passport-auth "5.8.*"
&nbsp;
&nbsp;
2) Then install laravel passport package,  
- composer require laravel/passport
&nbsp;
&nbsp;
3) Create db connection and run migrations,  
- php artisan migrate
&nbsp;
&nbsp;
4) Generate keys,  
- php artisan passport:install
&nbsp;
&nbsp;
5) Add the Laravel\Passport\HasApiTokens trait to App\User model (Use my code).
&nbsp;
&nbsp;
6) Next, call the Passport::routes method within the boot method of the Providers/AuthServiceProvider (Use my code).
&nbsp;
&nbsp;
7) After, in config/auth.php configuration file, set the driver option of the api authentication guard to passport (Use my code). 
&nbsp;
&nbsp;
8) Create UserController (Use my code),  
- php artisan make:controller /API/UserController
&nbsp;
&nbsp;
9) Create api routes (Use my code).
&nbsp;
&nbsp;
10) Finally run the following command and check the application using Postman tool.
- php artisan serve  
&nbsp;
&nbsp;

## How to check application using Postman tool?

Bellow i mentioned my postman requests...
&nbsp;
&nbsp;
- http://127.0.0.1:8000/api/register 
--
Method:- POST
--
Payload:- 

{	"name":"Name",
    "email":"email@gmail.com",
    "password":"12345678"
}
--
--

- http://127.0.0.1:8000/api/authenticate
--
Method:- POST
--
Payload:- 
--
{   "email":"email@gmail.com",
    "password":"12345678"
}
--
--

- http://127.0.0.1:8000/api/user
--
Method:- GET
--
Payload:- Key: Authorization Value: Bearer [insert your token]
--
--
<br>
<br>
<p align="center">You can change above api as you wish and according to the requirements.</p>
