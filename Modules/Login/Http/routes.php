<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@index');
    Route::post('/sessionlogin', 'LoginController@store')->name('sessionlogin');
});
