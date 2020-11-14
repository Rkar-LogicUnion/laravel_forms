<?php

use Carbon\Carbon;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/','HomeController@index')->name('home');
Route::resource('/category', 'CategoryController');
Route::resource('/post', 'PostController');

Route::get('/dates',function(){
    $date=Carbon::now();
    var_dump($date->toDateTimeString());
    $date->addDay();
    var_dump($date->toDateTimeString());
});