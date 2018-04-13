<?php namespace App\Providers;

use App\Repositories\Login\Service;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Login\Repository;

class LoginProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('App\Repositories\Login\Service', function ($app) {
			$repository = new Repository();

			return new Service($repository);
		});
	}
}
