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
        $this->package('dinesh/bugonemail');
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
        $this->app->singleton('Bugonemail', function ($app) {
            $config = $app['config']['bugonemail'] ? : $app['config']['bugonemail::config'];

            $bug = new BugeException($config);

            if (in_array($app->environment(), $config['notify_environment'])) {
                $bug->setEnvironment($app->environment());
            }

            return $bug;
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
