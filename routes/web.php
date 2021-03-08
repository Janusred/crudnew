<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'UserController@index');
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');


