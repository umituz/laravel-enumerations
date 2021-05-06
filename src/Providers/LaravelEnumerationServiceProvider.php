<?php

namespace LaravelEnumeration\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelEnumerationServiceProvider
 * @package LaravelEnumeration\Providers
 */
class LaravelEnumerationServiceProvider extends ServiceProvider
{
	/**
	 * Boot
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			
			$this->registerPublishing();
		}
	}
	
	/**
	 * Register
	 */
	public function register()
	{
		//
	}
	
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('laravel-enumerations');
	}
	
	/**
	 * Register publishing
	 */
	protected function registerPublishing()
	{
		$this->publishes([
			__DIR__ . '/../../config/enumerations.php' => config_path('enumerations.php')
		], 'laravel-enumerations-config');
	}
}