<?php

Route::group(['middleware' => 'web', 'prefix' => 'jadwalpelajaran', 'namespace' => 'Modules\JadwalPelajaran\Http\Controllers'], function()
{
    Route::get('/', 'JadwalPelajaranController@index');
    Route::delete('/delete/{id}', 'JadwalPelajaranController@destroy');
});
