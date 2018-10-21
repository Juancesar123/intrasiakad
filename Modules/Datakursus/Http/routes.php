<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'datakursus', 'namespace' => 'Modules\Datakursus\Http\Controllers'], function()
{
    Route::get('/', 'DatakursusController@index')->name('indexDatakursus');
    Route::get('/edit', 'DatakursusController@edit');
    Route::get('/update', 'DatakursusController@update')->name('updateDatakursus');
    Route::delete('/{id}', 'DatakursusController@destroy');
});
