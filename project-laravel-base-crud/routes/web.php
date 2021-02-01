<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index') -> name('rotta-index');

Route::get('/{id}', 'MainController@show') -> name('rotta-show');
