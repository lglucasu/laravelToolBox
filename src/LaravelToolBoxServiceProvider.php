<?php 

namespace olucasu\laravelToolBox;

use Illuminate\Support\ServiceProvider;

class LaravelToolBoxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','laravelToolBox');
    }

    public function register()
    {

    }
}