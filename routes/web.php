<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AppController@index')->name('home');

Route::get('/home', 'AppController@index')->name('home');

Route::get('/{any}', 'AppController@index')->where('any', '.*');