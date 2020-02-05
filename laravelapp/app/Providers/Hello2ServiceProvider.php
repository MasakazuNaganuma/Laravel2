<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
//use Illuminate\View;
use Illuminate\Support\ServiceProvider;


class Hello2ServiceProvider extends ServiceProvider
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
		'layouts.index6', 'App\Http\Composers\HelloComposer'
	);
    }
}
