<?php

namespace Modules\Paypal\Models;

use Modules\Account\Models\Payment;
use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    protected $table = "paypal_paypal";

    /**
     * Add relationship to Payment
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name');
        $table->text('description');
        $table->string('published');
        $table->string('payment_id')->nullable();
        $table->string('transaction_code')->nullable();
        $table->string('status')->nullable();
        $table->string('amount')->nullable();
        $table->string('currency')->nullable();
        $table->string('item_number')->nullable();
    }

}
