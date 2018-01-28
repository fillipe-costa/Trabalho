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

use App\Mail\mailme;

Route::get('/', function() {
    return view('home');
});

Route::get('/enviar', function() {
  Mail::to('lagun.lahari@gmail.com')->send(new mailme);

  return view('emails.mailme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/contato', 'HomeController@contato')->name('contato');
