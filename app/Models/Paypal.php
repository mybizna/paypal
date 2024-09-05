<?php

namespace Modules\Paypal\Models;

use Modules\Account\Models\Payment;
use Modules\Base\Models\BaseModel;

class Paypal extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['payment_id', 'transaction_code', 'status', 'amount', 'currency', 'item_number'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "paypal";

    /**
     * Add relationship to Payment
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

}
