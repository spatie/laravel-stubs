<?php

namespace Spatie\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Feed\FeedServiceProvider;
use Spatie\Stubs\StubServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubServiceProvider::class,
        ];
    }

}
