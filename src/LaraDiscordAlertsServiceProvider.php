<?php

namespace LaraDiscordAlerts;

use Illuminate\Support\ServiceProvider;
use Illuminate\Log\Events\MessageLogged;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;

class LaraDiscordAlertsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/laradiscordalerts.php' => config_path('laradiscordalerts.php'),
        ], 'config');

        Event::listen(MessageLogged::class, function ($event) {
            if ($event->level === 'error') {
                DiscordLogger::send($event->message, $event->context);
            }
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/laradiscordalerts.php', 'laradiscordalerts');
    }
}
