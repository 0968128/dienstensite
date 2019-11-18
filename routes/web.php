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
Route::patch('/confirm', 'AppointmentsController@confirm');

// Routes met betrekking tot authorisatie en authenticatie
Auth::routes();
Route::group(['middleware' => ['moderator']], function() {
    Route::get('/users', 'UsersController@index')->name('moderator');
});

// Met betrekking op gebruikers
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');