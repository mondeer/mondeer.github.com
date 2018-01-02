<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/hire/imond', 'HireCtrl@hire');

Route::get('/newblog', 'BlogCtrl@create');

Route::post('/newblog', 'BlogCtrl@postCreate');

Route::get('/viewblogs', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
