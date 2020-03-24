<?php

namespace Spatie\Stubs;

use Illuminate\Support\ServiceProvider;

class StubServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubPublishCommand::class,
            ]);
        }
    }
}
