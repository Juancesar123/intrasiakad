<?php

Route::group(['middleware' => 'web', 'prefix' => 'dataguru', 'namespace' => 'Modules\Dataguru\Http\Controllers'], function()
{
    Route::get('/', 'DataguruController@index');
    Route::get('/createdataguru', 'DataguruController@create');
    Route::get('/edit/{id}', 'DataguruController@edit')->name('editform');
});
