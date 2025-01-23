<?php

namespace Modules\Paypal\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Paypal\Models\Paypal;

class PaypalResource extends BaseResource
{
    protected static ?string $model = Paypal::class;

    protected static ?string $slug = 'paypal/paypal';

    protected static ?string $navigationGroup = 'Account';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationParentItem = 'Gateway';

}
