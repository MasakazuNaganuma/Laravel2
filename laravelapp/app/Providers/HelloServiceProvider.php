<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
//use Illuminate\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
		'layouts.index5', function($view){
			$view->with('view_message','composer message!');
		}
	);
//	View::composer(
//		'layouts.index', 'App\Http\Composers\HelloComposer'
//	);

    }
}
