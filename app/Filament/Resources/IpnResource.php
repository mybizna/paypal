<?php

namespace Modules\Paypal\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Paypal\Models\Ipn;

class IpnResource extends BaseResource
{
    protected static ?string $model = Ipn::class;

    protected static ?string $slug = 'paypal/ipn';

    protected static ?string $navigationGroup = 'Account';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationParentItem = 'Gateway';

}
