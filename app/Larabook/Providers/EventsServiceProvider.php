<?php
namespace Larabook\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 3:28 PM
 */
class EventsServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['events']->listen('Larabook.*','Larabook\Handlers\EmailNotifier');
    }
}