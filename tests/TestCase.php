<?php

namespace Spatie\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
