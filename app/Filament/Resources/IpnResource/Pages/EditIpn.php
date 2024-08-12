<?php

namespace Modules\Paypal\Filament\Resources\IpnResource\Pages;

use Modules\Paypal\Filament\Resources\IpnResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIpn extends EditRecord
{
    protected static string $resource = IpnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
