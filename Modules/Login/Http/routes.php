<?php

Route::group(['middleware' => ['web','authlogin'], 'prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@index')->name('formLogin');
    Route::post('/sessionlogin', 'LoginController@store')->name('sessionlogin');
});

Route::group(['middleware' => ['web','authlogin'], 'prefix' => 'register', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@register')->name('formRegister');
    Route::post('/', 'LoginController@authregister')->name('authregister');
});

Route::group(['middleware' => 'web', 'prefix' => 'logout', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@logout')->name('logout');
});
