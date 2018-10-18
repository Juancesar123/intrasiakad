<?php

Route::group(['middleware' => ['web','token'], 'prefix' => 'homepage', 'namespace' => 'Modules\Homepage\Http\Controllers'], function()
{
    Route::get('/', 'HomepageController@index');
});
