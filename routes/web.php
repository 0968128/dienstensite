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

Auth::routes();

Route::get('/insert/appointment', function () {
    return view('appointments.create');
});

Route::get('/show/appointments', 'AppointmentsController@index');

Route::post('/store/appointment', 'AppointmentsController@create');

Route::post('/', function() {
    return view('appointments.show');
});