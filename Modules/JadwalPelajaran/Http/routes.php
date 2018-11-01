<?php

Route::group(['middleware' => 'web', 'prefix' => 'jadwalkursus', 'namespace' => 'Modules\JadwalPelajaran\Http\Controllers'], function()
{
    Route::get('/', 'JadwalPelajaranController@index')->name('jadwalkursus');
    Route::delete('/delete/{id}', 'JadwalPelajaranController@destroy');
    Route::get('/edit/{id}', 'JadwalPelajaranController@edit')->name('jadwalformedit');
    Route::patch('/update', 'JadwalPelajaranController@update')->name('jadwalupdate');
    Route::get('/addform','JadwalPelajaranController@addform')->name('jadwaladd');
});
