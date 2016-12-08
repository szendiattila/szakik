<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard/expert', 'Dashboard\ExpertsController');

Auth::routes();

Route::get('/home', 'HomeController@index');
