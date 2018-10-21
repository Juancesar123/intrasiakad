<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'dataguru', 'namespace' => 'Modules\Dataguru\Http\Controllers'], function()
{
    Route::get('/', 'DataguruController@index')->name('indexDataguru');
});
