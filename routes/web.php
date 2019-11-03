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
Route::resource('/appointments', 'AppointmentsController');
//Route::get('/appointments', 'AppointmentsController@index');
//Route::get('/appointments/create', 'AppointmentsController@create');
//Route::get('/appointments/{appointment}', 'AppointmentsController@show');
//Route::post('/appointments', 'AppointmentsController@store');
//Route::get('/appointments/{appointment}/edit', 'AppointmentsController@edit');
//Route::patch('/appointments/{appointment}', 'AppointmentsController@update');
//Route::delete('/appointments/{appointment}', 'AppointmentsController@destory');

// Routes met de timeslotscontroller
Route::get('/timeslots', 'TimeslotsController@index');
Route::get('/timeslots/create', 'TimeslotsController@create');
Route::post('/timeslots/store', 'TimeslotsController@store');

// Routes met betrekking tot authorisatie en authenticatie
Auth::routes();
Route::group(['middleware' => ['moderator']], function() {
    Route::get('/moderators', 'ModeratorsController@moderatorDemo')->name('moderator');
});

// Met betrekking op gebruikers
Route::get('/users', 'UsersController@index');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users', 'UsersController@update');
Route::patch('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');