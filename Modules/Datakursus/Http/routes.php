<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'datakursus', 'namespace' => 'Modules\Datakursus\Http\Controllers'], function()
{
    Route::get('/', 'DatakursusController@index')->name('indexDatakursus');
    Route::get('/edit/{id}', 'DatakursusController@edit')->name('editform');
    Route::post('/save','DatakursusController@store')->name('saveCoursedata');
    Route::get('/addform','DatakursusController@addform')->name('addform');
    Route::patch('/update/{id}', 'DatakursusController@update')->name('updateDatakursus');
    Route::get('/delete/{id}', 'DatakursusController@destroy');
});
