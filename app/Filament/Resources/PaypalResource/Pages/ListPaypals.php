<?php

namespace Modules\Paypal\Filament\Resources\PaypalResource\Pages;

use Modules\Paypal\Filament\Resources\PaypalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaypals extends ListRecords
{
    protected static string $resource = PaypalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
