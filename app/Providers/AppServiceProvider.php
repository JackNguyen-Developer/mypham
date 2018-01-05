<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $value = \App\Utilities\Copyright::displayNotice();

        view()->share('copyright', $value);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //JN:171228:crud-generator
        if ($this->app->environment() == 'local') {
            $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
        }
    }
}
