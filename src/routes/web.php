<?php

Route::group(['middleware' => ['web', 'auth'], 'namespace' => "SagunKho\\Laracart\\Controllers"], function() {

	Route::group(['prefix' => 'products', 'as' => 'products:'], function() {
		Route::get('/', 'ProductController@index')->name('index');
	});
});
