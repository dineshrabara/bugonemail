<?php

namespace Dinesh\Bugonemail;

use Illuminate\Support\ServiceProvider;

class BugonemailServiceProvider extends ServiceProvider {

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
    public function boot() {
        $configPath = __DIR__ . '/../../config/bugonemail.php';
        $this->publishes([$configPath => config_path('bugonemail.php')], 'config');        
        $app = $this->app;

        // Register for exception handling
        $app->error(function (\Exception $exception) use ($app) {
            $app['Bugonemail']->notifyException($exception);
        });

        // Register for fatal error handling
        $app->fatal(function ($exception) use ($app) {
            $app['Bugonemail']->notifyException($exception);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        //
        $this->app['BugeException'] = $this->app->share(function($app) {
            $config = $app['config']['bugonemail'] ? : $app['config']['bugonemail::config'];
            $bug = new BugeException($config);

            if (in_array($app->environment(), $config['notify_environment'])) {
                $bug->setEnvironment($app->environment());
            }

            return $bug;
        });
        $this->app->singleton('Bugonemail', function ($app) {
            $config = $app['config']['bugonemail'] ? : $app['config']['bugonemail::config'];
            
            $bug = new BugeException($config);

            if (in_array($app->environment(), $config['notify_environment'])) {
                $bug->setEnvironment($app->environment());
            }

            return $bug;
        });
        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function() {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('BugeException', 'Dinesh\Bugonemail\Facades\BugeExceptionFacade');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array("Bugonemail");
    }

}
