<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\assertFileDoesNotExist;
use function PHPUnit\Framework\assertFileEquals;
use function PHPUnit\Framework\assertFileExists;

it('can publish stubs', function () {
    $targetStubsPath = $this->app->basePath('stubs');

    File::deleteDirectory($targetStubsPath);

    $this->artisan('spatie-stub:publish')->assertExitCode(0);

    $stubPath = __DIR__ . '/../stubs/migration.stub';

    $publishedStubPath = $targetStubsPath . '/migration.stub';

    assertFileEquals($stubPath, $publishedStubPath);
});

it('can publish laravel 11 stubs', function () {
    App::shouldReceive('version')->andReturn('11');

    $targetStubsPath = $this->app->basePath('stubs');

    File::deleteDirectory($targetStubsPath);

    $this->artisan('spatie-stub:publish')->assertExitCode(0);

    assertFileExists($targetStubsPath . '/enum.stub');
});

it('will not publish laravel 11 stubs for laravel 10 and lower', function () {
    App::shouldReceive('version')->andReturn('10');

    $targetStubsPath = $this->app->basePath('stubs');

    File::deleteDirectory($targetStubsPath);

    $this->artisan('spatie-stub:publish')->assertExitCode(0);

    assertFileDoesNotExist($targetStubsPath . '/enum.stub');
});
