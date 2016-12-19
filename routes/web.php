<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard/expert', 'Dashboard\ExpertsController');
Route::resource('dashboard/role', 'Dashboard\RolesController');



Auth::routes();

Route::get('/home', 'HomeController@index');
