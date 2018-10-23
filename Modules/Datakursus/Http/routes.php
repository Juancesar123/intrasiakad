<?php

Route::group(['middleware' => 'web', 'prefix' => 'datakursus', 'namespace' => 'Modules\Datakursus\Http\Controllers'], function()
{
    Route::get('/', 'DatakursusController@index');
    Route::get('addform','DatakursusController@addform')->name('Addform');
   
});
