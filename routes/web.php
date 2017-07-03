<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/hire/imond', 'HireCtrl@hire');
