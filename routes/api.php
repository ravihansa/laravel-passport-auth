<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
Route::group(['middleware' => ['auth:api'], 'namespace' => 'API'], function() {

    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('logout', 'UserController@logout');

});    

Route::group(['namespace' => 'API'], function() {
   
    Route::post('/register', 'UserController@register');
    Route::post('/authenticate', 'UserController@authenticate');

}); 
*/

Route::group(['namespace' => 'API'], function () {
    Route::post('authenticate', 'UserController@authenticate');
    Route::post('register', 'UserController@register');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@getAuthenticatedUser');
    });
});
