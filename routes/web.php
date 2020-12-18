<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hasOne','AdminController@index')->name('admins');
Route::get('/phone','PhoneController@index')->name('phones');
Route::get('/belongsTo','PostController@index')->name('posts');

route::get('/tarek','PostController@posts')->name('posts');
