<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'dataguru', 'namespace' => 'Modules\Dataguru\Http\Controllers'], function()
{
    Route::get('/', 'DataguruController@index');
    Route::get('/createdataguru', 'DataguruController@create');
    Route::get('/edit/{id}', 'DataguruController@edit')->name('editform');
    Route::get('/delete/{id}', 'DataGuruController@destroy');
});
