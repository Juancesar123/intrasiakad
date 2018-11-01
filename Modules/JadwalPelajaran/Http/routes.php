<?php

Route::group(['middleware' => 'web', 'prefix' => 'jadwalpelajaran', 'namespace' => 'Modules\JadwalPelajaran\Http\Controllers'], function()
{
    Route::get('/', 'JadwalPelajaranController@index')->name('indexJadwalPelajaran');
Route::get('/addform','JadwalPelajaranController@addform')->name('addformJadwalPelajaran');
});
