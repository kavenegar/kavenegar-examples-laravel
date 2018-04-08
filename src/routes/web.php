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

Route::get('/sms/', 'SmsController@index');
Route::get('/sms/send', 'SmsController@send');
Route::get('/sms/sendarray', 'SmsController@sendarray');
Route::get('/sms/verification', 'SmsController@verification');