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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [
    'as' => 'login',
    'uses' => 'AuthenticationController@login'
]);
Route::post('/register', [
    'as' => 'register',
    'uses' => 'AuthenticationController@register'
]);


Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('donor', 'DonorController');
    Route::get('donor/edit/{id}', [
        'as' => 'donor.edit',
        'uses' => 'DonorController@edit'
    ]);
    Route::apiResource('bloodbank', 'BloodbankController');
    Route::get('bloodbank/edit/{id}', [
        'as' => 'bloodbank.edit',
        'uses' => 'BloodbankController@edit'
    ]);
});
//Route::get('donor', 'DonorController@index');