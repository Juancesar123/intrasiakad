<?php

Route::group(['middleware' => 'web', 'prefix' => 'datapelajaran', 'namespace' => 'Modules\DataPelajaran\Http\Controllers'], function()
{
    Route::get('/', 'DataPelajaranController@index');
});
