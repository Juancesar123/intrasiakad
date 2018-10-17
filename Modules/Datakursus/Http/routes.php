<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakursus', 'namespace' => 'Modules\Datakursus\Http\Controllers'], function()
{
    Route::get('/', 'DatakursusController@index');
});
