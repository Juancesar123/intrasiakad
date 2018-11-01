<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'dataguru', 'namespace' => 'Modules\Dataguru\Http\Controllers'], function()
{
    Route::get('/', 'DataguruController@index')->name('indexDataguru');
    Route::get('/createdataguru', 'DataguruController@create');
    Route::get('/edit/{id}', 'DataguruController@edit')->name('editform');
    Route::put('/update/{id}', 'DataguruController@update');
    Route::get('/delete/{id}', 'DataGuruController@destroy');
});
