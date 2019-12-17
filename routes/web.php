<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('perfil', 'UserController@profile')->name('perfil.index');
Route::post('perfil', 'UserController@update')->name('perfil.update');


Route::group(['prefix'], function(){
    Route::resource('apostas','BetController');
});

Route::group(['prefix'], function(){
    Route::resource('bancas','BookmakerController');
    Route::post('bancas/inactive/{id}','BookmakerController@inactive')->name('bancas.inactive');
});

Route::group(['prefix'], function(){
    Route::resource('saques','PlunderController');
});

Route::group(['prefix'], function(){
    Route::resource('depositos','DepositController');
});