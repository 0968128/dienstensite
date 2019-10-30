<?php

use Illuminate\Http\Request;

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

// Routes voor basale pagina's
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/profile', 'PagesController@profile');

// Routes met de afsprakencontroller
Route::get('/create/appointment', 'AppointmentsController@create');
Route::get('/show/appointments', 'AppointmentsController@index');
Route::post('/store/appointment', 'AppointmentsController@store');

// Routes met de timeslotscontroller
Route::get('/create/timeslot', 'TimeslotsController@create');
Route::get('/show/timeslots', 'TimeslotsController@index');
Route::post('/store/timeslot', 'TimeslotsController@store');

// Routes met betrekking tot authorisatie en authenticatie
Auth::routes();