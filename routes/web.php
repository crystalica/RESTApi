<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return "Halo selamat datang di student REST API";
});


Route::post('api/login', 'AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('api/logout', 'AuthController@logout');
    Route::post('api/refresh', 'AuthController@refresh');
    Route::get('api/profile', 'AuthController@get_profile');
    Route::get('api/students', 'StudentController@index');
    Route::get('api/students/{id}', 'StudentController@show');
    Route::post('api/students', 'StudentController@store');
    Route::patch('api/students/{id}', 'StudentController@update');
    Route::delete('api/students/{id}', 'StudentController@delete');
});

