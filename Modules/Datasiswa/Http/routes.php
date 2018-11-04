<?php

Route::group(['middleware' => 'web', 'prefix' => 'datasiswa', 'namespace' => 'Modules\Datasiswa\Http\Controllers'], function()
{
    Route::get('/', 'DatasiswaController@index');
    Route::get('/createPeserta', 'DatasiswaController@create');
});
