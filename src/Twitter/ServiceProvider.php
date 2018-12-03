<?php

namespace Boarrd\Twitter;

use Boarrd\Framework\Boarrd;
use Boarrd\Twitter\Commands\SendFakeTweet;
use Boarrd\Twitter\Commands\ListenForMentions;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Boarrd::script('twitter', __DIR__.'/../../dist/js/twitter.js');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ListenForMentions::class,
                SendFakeTweet::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
