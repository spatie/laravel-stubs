<?php

namespace Spatie\Stubs;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class StubsPublishCommand extends Command
{
    use ConfirmableTrait;

    protected $signature = 'spatie-stub:publish {--force : Overwrite any existing files}';

    protected $description = 'Publish all opinionated stubs that are available for customization';

    public function handle()
    {
        if (! $this->confirmToProceed()) {
            return 1;
        }

        if (! is_dir($stubsPath = $this->laravel->basePath('stubs'))) {
            (new Filesystem())->makeDirectory($stubsPath);
        }

        $files = collect(File::files(__DIR__ . '/../stubs'))
            ->unless($this->option('force'), fn ($files) => $this->unpublished($files))
            ->unless($this->laravelVersion() >= 11, fn ($files) => $this->preLaravelEleven($files));

        $published = $this->publish($files);

        $this->info("{$published} / {$files->count()} stubs published.");
    }

    public function unpublished(Collection $files): Collection
    {
        return $files->reject(function (SplFileInfo $file) {
            return file_exists($this->targetPath($file));
        });
    }

    public function preLaravelEleven(Collection $files): Collection
    {
        $laravel11NewStubs = [
            'cast.inbound.stub',
            'cast.stub',
            'class.invokable.stub',
            'class.stub',
            'controller.nested.singleton.api.stub',
            'controller.nested.singleton.stub',
            'controller.singleton.api.stub',
            'controller.singleton.stub',
            'enum.backed.stub',
            'enum.stub',
            'markdown-mail.stub',
            'markdown-notification.stub',
            'notification.stub',
            'observer.plain.stub',
            'observer.stub',
            'scope.stub',
            'trait.stub',
            'view-component.stub',
        ];

        return $files->reject(function (SplFileInfo $file) use ($laravel11NewStubs) {
            return in_array($file->getFilename(), $laravel11NewStubs);
        });
    }

    public function publish(Collection $files): int
    {
        return $files->reduce(function (int $published, SplFileInfo $file) {
            file_put_contents($this->targetPath($file), file_get_contents($file->getPathname()));

            return $published + 1;
        }, 0);
    }

    public function targetPath(SplFileInfo $file): string
    {
        return "{$this->laravel->basePath('stubs')}/{$file->getFilename()}";
    }

    public function laravelVersion(): int
    {
        return intval(App::version());
    }
}
