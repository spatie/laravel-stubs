<?php

namespace Spatie\Stubs\Canvas;

class Package extends \Orchestra\Canvas\Core\Presets\Package
{
    /**
     * Get custom stub path.
     */
    public function getCustomStubPath(): ?string
    {
        return __DIR__.'/../../stubs';
    }
}
