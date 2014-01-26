<?php namespace Saiffil\Infusionsoft;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class InfusionsoftServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->package('saiffil/infusionsoft');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['infusionsoft'] = $this->app->share(function()
		{
			return (new Infusionsoft)->isdk();
		});

		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Fuse','Saiffil\Infusionsoft\Facades\Infusionsoft');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('infusionsoft');
	}
}