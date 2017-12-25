<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('event-single', function () {
    return view('single-user-pusher');
});

Route::get('event-all', function () {
    return view('all-user-event');
});


Route::post('event-single', [
    'uses' => 'PushController@singleUserEvent',
    'as' => 'event-single'
]);

Route::post('event-all', [
    'uses' => 'PushController@allUserEvent',
    'as' => 'event-all'
]);