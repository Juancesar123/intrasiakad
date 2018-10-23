<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'datakursus', 'namespace' => 'Modules\Datakursus\Http\Controllers'], function()
{
    Route::get('/', 'DatakursusController@index')->name('indexDatakursus');
    Route::get('/edit', 'DatakursusController@edit');
    Route::put('/update', 'DatakursusController@update')->name('updateDatakursus');
    Route::post('/create', 'DatakursusController@store')->name('createDatakursus');
    Route::delete('/{id}', 'DatakursusController@destroy');
});
