<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index') -> name('rotta-index');

Route::get('/show/{id}', 'MainController@show') -> name('rotta-show');

Route::get('/input', 'MainController@create') -> name('rotta-create');

Route::post('/store', 'MainController@store') -> name('rotta-store');