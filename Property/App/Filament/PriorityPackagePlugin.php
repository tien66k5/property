<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PriorityPackagePlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Property';
    }

    public function getId(): string
    {
        return 'prioritypackage';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}