<?php

namespace Cor\LaravelTemplate;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class LaravelTemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {

        if ($this->app->runningInConsole())
        {
            // Load Routes //
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

            // Load Views //
            $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-template');

            // Delete Files //
            File::delete(base_path('webpack.mix.js'));

            // Register Publishing //
            $this->registerPublishing();
        }

    }

    public function register()
    {
        // Register Command //
        $this->commands([
            Console\LaravelTemplateCommand::class
        ]);
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/resources/js' => resource_path('js'),
            __DIR__ . '/resources/lang' => resource_path('lang'),
            __DIR__ . '/resources/sass' => resource_path('sass'),
            __DIR__ . '/resources/views' => resource_path('views'),
            __DIR__ . '/webpack.mix.js' => base_path('webpack.mix.js'),
            __DIR__ . '/routes/web.php' => base_path('routes/web.php')
        ], 'laravel-template');
    }
}
