<?php

/*
 *
 *
 * (c) Allen, Li <morningbuses@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Goodcatch\U9WS\Laravel;

use Goodcatch\U9WS\U9WS;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider
 * @package Goodcatch\U9WS\Laravel
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->configure();
        $this->offerPublishing();
        $this->registerServices();

    }

    /**
     * Register config.
     */
    protected function configure()
    {

        $this->mergeConfigFrom(
            __DIR__.'/../../config/u9ws.php', 'u9'
        );

    }

    /**
     * Setup the resource publishing groups for Horizon.
     *
     * @return void
     */
    protected function offerPublishing()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/u9ws.php' => config_path('u9ws.php'),
            ], 'u9ws-config');
        }
    }

    /**
     * Register Guanyi services in the container.
     *
     * @see link(http://gop.guanyierp.com/hc/kb/article/1235511/ Api_doc)
     *
     *
     * @return void
     */
    protected function registerServices()
    {
        $this->app->singleton('u9ws', function ($app) {
            $config = $app->make('config')->get('u9ws');
            return new U9WS ($config);
        });
    }
}