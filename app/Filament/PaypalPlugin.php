<?php

namespace Modules\Paypal\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PaypalPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Paypal';
    }

    public function getId(): string
    {
        return 'paypal';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
