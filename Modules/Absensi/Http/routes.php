<?php

Route::group(['middleware' => 'web', 'prefix' => 'absensi', 'namespace' => 'Modules\Absensi\Http\Controllers'], function()
{
    Route::get('/', 'AbsensiController@index');
});
