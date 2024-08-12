<?php

namespace Modules\Paypal\Filament\Resources\IpnResource\Pages;

use Modules\Paypal\Filament\Resources\IpnResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIpns extends ListRecords
{
    protected static string $resource = IpnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
