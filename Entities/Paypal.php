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

 


  
}
