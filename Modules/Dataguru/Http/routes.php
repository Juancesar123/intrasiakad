<?php

Route::group(['middleware' => 'web', 'prefix' => 'dataguru', 'namespace' => 'Modules\Dataguru\Http\Controllers'], function()
{
    Route::get('/', 'DataguruController@index');
    Route::post('/create', 'DataguruController@store')->name('dataGuruCreate');
});
