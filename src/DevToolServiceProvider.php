<?php

namespace Karim007\DevTools;

use Illuminate\Support\ServiceProvider;
use Karim007\DevTools\Dev\Devtool;

class DevToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../config/devtool.php" => config_path("devtool.php")
        ]);

        $this->loadRoutesFrom(__DIR__ . "/routes/dev_tools_route.php");
        $this->loadViewsFrom(__DIR__ . '/Views', 'devtool');
    }

    /**
     * Register application services
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../config/devtool.php", "devtool");

        $this->app->bind("devtool", function () {
            return new Devtool();
        });
    }
}
