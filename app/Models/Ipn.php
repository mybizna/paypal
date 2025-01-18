<?php

namespace Modules\Paypal\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Ipn extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'business', 'charset', 'custom', 'notify_version', 'parent_txn_id', 'receiver_email', 'receiver_id', 'residence_country', 'test_ipn', 'txn_id', 'txn_type', 'verify_sign', 'address_country', 'address_city', 'address_country_code', 'address_name', 'address_state', 'address_status', 'address_street', 'address_zip', 'contact_phone', 'first_name', 'last_name', 'payer_business_name', 'payer_email', 'payer_id', 'auth_amount', 'auth_exp', 'auth_id', 'auth_status', 'exchange_rate', 'invoice', 'item_name', 'item_number', 'mc_currency', 'mc_fee', 'mc_gross', 'mc_handling', 'mc_shipping', 'memo', 'num_cart_items', 'option_name1', 'option_name2', 'payer_status', 'payment_date', 'payment_gross', 'payment_status', 'payment_type', 'pending_reason', 'protection_eligibility', 'quantity', 'reason_code', 'remaining_settle', 'settle_amount', 'settle_currency', 'shipping', 'shipping_method', 'tax', 'transaction_entity', 'auction_buyer_id', 'auction_closing_date', 'auction_multi_item', 'for_auction', 'amount', 'amount_per_cycle', 'initial_payment_amount', 'next_payment_date', 'outstanding_balance', 'payment_cycle', 'period_type', 'product_name', 'product_type', 'profile_status', 'recurring_payment_id', 'rp_invoice_id', 'time_created', 'amount1', 'amount2', 'amount3', 'mc_amount1', 'mc_amount2', 'mc_amount3', 'password', 'period1', 'period2', 'period3', 'reattempt', 'recur_times', 'recurring', 'retry_at', 'subscr_date', 'subscr_effective', 'subscr_id', 'username', 'case_creation_date', 'case_id', 'case_type', 'receipt_id', 'currency_code', 'handling_amount', 'transaction_subject', 'ipaddress', 'flag', 'flag_code', 'flag_info', 'query', 'response', 'from_view', 'mp_id', 'option_selection1', 'option_selection2'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "paypal_ipn";


    public function migration(Blueprint $table): void
    {

        $table->string('business', 127);
        $table->string('charset');
        $table->string('custom', 256);
        $table->decimal('notify_version', 64)->nullable();
        $table->string('parent_txn_id', 19);
        $table->string('receiver_email', 254);
        $table->string('receiver_id');
        $table->string('residence_country', 2);
        $table->boolean('test_ipn')->default(false);
        $table->string('txn_id');
        $table->string('txn_type');
        $table->string('verify_sign');
        $table->string('address_country', 64);
        $table->string('address_city', 40);
        $table->string('address_country_code', 64);
        $table->string('address_name', 128);
        $table->string('address_state', 40);
        $table->string('address_status');
        $table->string('address_street', 200);
        $table->string('address_zip', 20);
        $table->string('contact_phone', 20);
        $table->string('first_name', 64);
        $table->string('last_name', 64);
        $table->string('payer_business_name', 127);
        $table->string('payer_email', 127);
        $table->string('payer_id', 13);
        $table->decimal('auth_amount', 64)->nullable();
        $table->string('auth_exp', 28);
        $table->string('auth_id', 19);
        $table->string('auth_status');
        $table->decimal('exchange_rate', 64, 16)->nullable();
        $table->string('invoice', 127);
        $table->string('item_name', 127);
        $table->string('item_number', 127);
        $table->string('mc_currency', 32);
        $table->decimal('mc_fee', 64)->nullable();
        $table->decimal('mc_gross', 64)->nullable();
        $table->decimal('mc_handling', 64)->nullable();
        $table->decimal('mc_shipping', 64)->nullable();
        $table->string('memo');
        $table->integer('num_cart_items')->nullable();
        $table->string('option_name1', 64);
        $table->string('option_name2', 64);
        $table->string('payer_status');
        $table->dateTime('payment_date', 6)->nullable();
        $table->decimal('payment_gross', 64)->nullable();
        $table->string('payment_status');
        $table->string('payment_type');
        $table->string('pending_reason');
        $table->string('protection_eligibility');
        $table->integer('quantity')->nullable();
        $table->string('reason_code');
        $table->decimal('remaining_settle', 64)->nullable();
        $table->decimal('settle_amount', 64)->nullable();
        $table->string('settle_currency', 32);
        $table->decimal('shipping', 64)->nullable();
        $table->string('shipping_method');
        $table->decimal('tax', 64)->nullable();
        $table->string('transaction_entity');
        $table->string('auction_buyer_id', 64);
        $table->dateTime('auction_closing_date', 6)->nullable();
        $table->integer('auction_multi_item')->nullable();
        $table->decimal('for_auction', 64)->nullable();
        $table->decimal('amount', 64)->nullable();
        $table->decimal('amount_per_cycle', 64)->nullable();
        $table->decimal('initial_payment_amount', 64)->nullable();
        $table->dateTime('next_payment_date', 6)->nullable();
        $table->decimal('outstanding_balance', 64)->nullable();
        $table->string('payment_cycle');
        $table->string('period_type');
        $table->string('product_name');
        $table->string('product_type');
        $table->string('profile_status');
        $table->string('recurring_payment_id');
        $table->string('rp_invoice_id', 127);
        $table->dateTime('time_created', 6)->nullable();
        $table->decimal('amount1', 64)->nullable();
        $table->decimal('amount2', 64)->nullable();
        $table->decimal('amount3', 64)->nullable();
        $table->decimal('mc_amount1', 64)->nullable();
        $table->decimal('mc_amount2', 64)->nullable();
        $table->decimal('mc_amount3', 64)->nullable();
        $table->string('password', 24);
        $table->string('period1');
        $table->string('period2');
        $table->string('period3');
        $table->string('reattempt', 1);
        $table->integer('recur_times')->nullable();
        $table->string('recurring', 1);
        $table->dateTime('retry_at', 6)->nullable();
        $table->dateTime('subscr_date', 6)->nullable();
        $table->dateTime('subscr_effective', 6)->nullable();
        $table->string('subscr_id', 19);
        $table->string('username', 64);
        $table->dateTime('case_creation_date', 6)->nullable();
        $table->string('case_id');
        $table->string('case_type');
        $table->string('receipt_id');
        $table->string('currency_code', 32);
        $table->decimal('handling_amount', 64)->nullable();
        $table->string('transaction_subject', 256);
        $table->char('ipaddress', 39)->nullable();
        $table->boolean('flag')->default(false);
        $table->string('flag_code', 16);
        $table->longText('flag_info');
        $table->longText('query');
        $table->longText('response');
        $table->string('from_view', 6)->nullable();
        $table->string('mp_id', 128)->nullable();
        $table->string('option_selection1', 200);
        $table->string('option_selection2', 200);


    }


}
