<?php

Route::group(['middleware' => ['web', 'auth'], 'namespace' => "SagunKho\\Laracart\\Controllers"], function()
{

	Route::group(['prefix' => 'shop', 'as' => 'shop:'], function() {
		Route::group(['prefix' => 'products', 'as' => 'products:'], function()
		{
			Route::get('/', 'ProductController@index')->name('index');
		});

		Route::group(['prefix' => 'cart', 'as' => 'cart:'], function()
		{
			Route::post('add', 'ShoppingCartController@add')->name('add');
			Route::post('remove', 'ShoppingCartController@remove')->name('remove');
		});

		Route::group(['prefix' => 'orders', 'as' => 'orders:'], function() {
			Route::get('index', 'OrderController@index')->name('index');
		});
	});

	Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin:', 'namespace' => 'Admin'], function()
	{
		Route::group(['prefix' => 'products', 'as' => 'products:'], function()
		{
			Route::get('/', 'ProductController@index')->name('index');
			Route::post('edit/{id}', 'ProductController@edit')->name('edit');
			Route::post('create', 'ProductController@create')->name('create');
			Route::post('delete', 'ProductController@delete')->name('delete');
		});

		Route::group(['prefix' => 'product-categories', 'as' => 'productcategories:'], function()
		{
			Route::get('/', 'ProductCategoriesController@index')->name('index');
			Route::post('edit/{id}', 'ProductCategoriesController@edit')->name('edit');
			Route::post('create', 'ProductCategoriesController@create')->name('create');
			Route::post('delete', 'ProductCategoriesController@delete')->name('delete');
		});
	});
});
