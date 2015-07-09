<?php

Route::group(['prefix' => 'theme2014', 'namespace' => 'YC\Theme2014\Http\Controllers'], function()
{
	Route::get('/', 'Theme2014Controller@index');
});