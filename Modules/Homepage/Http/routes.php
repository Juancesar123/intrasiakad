<?php

Route::group(['middleware' => 'web', 'prefix' => 'homepage', 'namespace' => 'Modules\Homepage\Http\Controllers'], function()
{
    Route::get('/', 'HomepageController@index');
});
