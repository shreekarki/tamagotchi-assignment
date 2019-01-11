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
Route::group(['middleware' => 'jwt.auth'], function()
{
    Route::group(['prefix' => 'tomagotchis'], function()
        {
            Route::get('/', 'TamagotchiController@index');
            Route::get('/{id}', 'TamagotchiController@show');
            Route::post('/', 'TamagotchiController@store');
            Route::put('/{id}', 'TamagotchiController@update');
            Route::delete('/{id}', 'TamagotchiController@delete');
        });

     Route::group(['prefix' => 'hotelrooms'], function()
        {
            Route::get('/', 'HotelroomController@index');
            Route::get('/{id}', 'HotelroomController@show');
            Route::post('/', 'HotelroomController@store');
            Route::put('/{id}', 'HotelroomController@update');
            Route::delete('/{id}', 'HotelroomController@delete');
        });

    Route::get('users', function(Request $request) {
        return auth()->user();
        });
});

Route::post('user/register', 'UserController@register');
Route::post('user/login', 'UserController@login');

