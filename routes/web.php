<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix'], function(){
    Route::resource('apostas','BetController');
});

Route::group(['prefix'], function(){
    Route::resource('bancas','BookmakerController');
});

Route::group(['prefix'], function(){
    Route::resource('saques','PlunderController');
});

Route::group(['prefix'], function(){
    Route::resource('depositos','DepositController');
});