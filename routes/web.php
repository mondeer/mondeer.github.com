<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/hire/imond', 'HireCtrl@hire');

Route::get('/newblog', 'BlogCtrl@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
