<?php

namespace SagunKho\Laracart;

use Illuminate\Support\ServiceProvider;

class LaracartServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		/* Publish Migrations */
		$this->loadMigrationsFrom(__DIR__ . '/database/migrations');

		$this->publishes([
			__DIR__.'/../config/laracart.php' => config_path('laracart.php'),
		], 'config');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	}
}
