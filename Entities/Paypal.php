<?php

namespace Modules\Paypal\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Paypal extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = [ 'payment_id', 'transaction_code', 'status', 'amount', 'currency', 'item_number'];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "paypal";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);



        $this->fields->increments('id')->html('hidden');
        $this->fields->string('name')->html('text');
        $this->fields->string('description')->html('textarea');
        $this->fields->string('published')->html('switch');
        $this->fields->string('payment_id')->nullable()->html('text');
        $this->fields->string('transaction_code')->nullable()->html('text');
        $this->fields->string('status')->nullable()->html('text');
        $this->fields->string('amount')->nullable()->html('text');
        $this->fields->string('currency')->nullable()->html('text');
        $this->fields->string('item_number')->nullable()->html('text');
    }


  
}
