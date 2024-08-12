<?php

namespace Modules\Paypal\Filament\Resources\PaypalResource\Pages;

use Modules\Paypal\Filament\Resources\PaypalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaypal extends EditRecord
{
    protected static string $resource = PaypalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
