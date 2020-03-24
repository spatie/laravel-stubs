<?php

namespace Spatie\Stubs;

use Illuminate\Foundation\Console\StubPublishCommand as IlluminateStubPublishCommand;

class StubPublishCommand extends IlluminateStubPublishCommand
{
    protected $signature = 'stub:publish';

    protected $description = 'Publish all opinionated stubs that are available for customization';

}
