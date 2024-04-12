<?php

namespace Modules\Paypal\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Ipn extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'business', 'charset', 'custom', 'notify_version', 'parent_txn_id', 'receiver_email', 'receiver_id', 'residence_country', 'test_ipn', 'txn_id', 'txn_type', 'verify_sign', 'address_country', 'address_city', 'address_country_code', 'address_name', 'address_state', 'address_status', 'address_street', 'address_zip', 'contact_phone', 'first_name', 'last_name', 'payer_business_name', 'payer_email', 'payer_id', 'auth_amount', 'auth_exp', 'auth_id', 'auth_status', 'exchange_rate', 'invoice', 'item_name', 'item_number', 'mc_currency', 'mc_fee', 'mc_gross', 'mc_handling', 'mc_shipping', 'memo', 'num_cart_items', 'option_name1', 'option_name2', 'payer_status', 'payment_date', 'payment_gross', 'payment_status', 'payment_type', 'pending_reason', 'protection_eligibility', 'quantity', 'reason_code', 'remaining_settle', 'settle_amount', 'settle_currency', 'shipping', 'shipping_method', 'tax', 'transaction_entity', 'auction_buyer_id', 'auction_closing_date', 'auction_multi_item', 'for_auction', 'amount', 'amount_per_cycle', 'initial_payment_amount', 'next_payment_date', 'outstanding_balance', 'payment_cycle', 'period_type', 'product_name', 'product_type', 'profile_status', 'recurring_payment_id', 'rp_invoice_id', 'time_created', 'amount1', 'amount2', 'amount3', 'mc_amount1', 'mc_amount2', 'mc_amount3', 'password', 'period1', 'period2', 'period3', 'reattempt', 'recur_times', 'recurring', 'retry_at', 'subscr_date', 'subscr_effective', 'subscr_id', 'username', 'case_creation_date', 'case_id', 'case_type', 'receipt_id', 'currency_code', 'handling_amount', 'transaction_subject', 'ipaddress', 'flag', 'flag_code', 'flag_info', 'query', 'response', 'from_view', 'mp_id', 'option_selection1', 'option_selection2'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['txn_id'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "paypal_ipn";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->integer('id', true);
        $this->fields->string('business', 127);
        $this->fields->string('charset');
        $this->fields->string('custom', 256);
        $this->fields->decimal('notify_version', 64)->nullable();
        $this->fields->string('parent_txn_id', 19);
        $this->fields->string('receiver_email', 254);
        $this->fields->string('receiver_id');
        $this->fields->string('residence_country', 2);
        $this->fields->boolean('test_ipn')->html('switch')->default(false);
        $this->fields->string('txn_id');
        $this->fields->string('txn_type');
        $this->fields->string('verify_sign');
        $this->fields->string('address_country', 64);
        $this->fields->string('address_city', 40);
        $this->fields->string('address_country_code', 64);
        $this->fields->string('address_name', 128);
        $this->fields->string('address_state', 40);
        $this->fields->string('address_status');
        $this->fields->string('address_street', 200);
        $this->fields->string('address_zip', 20);
        $this->fields->string('contact_phone', 20);
        $this->fields->string('first_name', 64);
        $this->fields->string('last_name', 64);
        $this->fields->string('payer_business_name', 127);
        $this->fields->string('payer_email', 127);
        $this->fields->string('payer_id', 13);
        $this->fields->decimal('auth_amount', 64)->nullable();
        $this->fields->string('auth_exp', 28);
        $this->fields->string('auth_id', 19);
        $this->fields->string('auth_status');
        $this->fields->decimal('exchange_rate', 64, 16)->nullable();
        $this->fields->string('invoice', 127);
        $this->fields->string('item_name', 127);
        $this->fields->string('item_number', 127);
        $this->fields->string('mc_currency', 32);
        $this->fields->decimal('mc_fee', 64)->nullable();
        $this->fields->decimal('mc_gross', 64)->nullable();
        $this->fields->decimal('mc_handling', 64)->nullable();
        $this->fields->decimal('mc_shipping', 64)->nullable();
        $this->fields->string('memo');
        $this->fields->integer('num_cart_items')->nullable();
        $this->fields->string('option_name1', 64);
        $this->fields->string('option_name2', 64);
        $this->fields->string('payer_status');
        $this->fields->dateTime('payment_date', 6)->nullable()->html('datetime');
        $this->fields->decimal('payment_gross', 64)->nullable()->html('datetime');
        $this->fields->string('payment_status');
        $this->fields->string('payment_type');
        $this->fields->string('pending_reason');
        $this->fields->string('protection_eligibility');
        $this->fields->integer('quantity')->nullable();
        $this->fields->string('reason_code');
        $this->fields->decimal('remaining_settle', 64)->nullable();
        $this->fields->decimal('settle_amount', 64)->nullable();
        $this->fields->string('settle_currency', 32);
        $this->fields->decimal('shipping', 64)->nullable();
        $this->fields->string('shipping_method');
        $this->fields->decimal('tax', 64)->nullable();
        $this->fields->string('transaction_entity');
        $this->fields->string('auction_buyer_id', 64);
        $this->fields->dateTime('auction_closing_date', 6)->nullable()->html('datetime');
        $this->fields->integer('auction_multi_item')->nullable();
        $this->fields->decimal('for_auction', 64)->nullable();
        $this->fields->decimal('amount', 64)->nullable();
        $this->fields->decimal('amount_per_cycle', 64)->nullable();
        $this->fields->decimal('initial_payment_amount', 64)->nullable();
        $this->fields->dateTime('next_payment_date', 6)->nullable()->html('datetime');
        $this->fields->decimal('outstanding_balance', 64)->nullable();
        $this->fields->string('payment_cycle');
        $this->fields->string('period_type');
        $this->fields->string('product_name');
        $this->fields->string('product_type');
        $this->fields->string('profile_status');
        $this->fields->string('recurring_payment_id');
        $this->fields->string('rp_invoice_id', 127);
        $this->fields->dateTime('time_created', 6)->nullable()->html('datetime');
        $this->fields->decimal('amount1', 64)->nullable();
        $this->fields->decimal('amount2', 64)->nullable();
        $this->fields->decimal('amount3', 64)->nullable();
        $this->fields->decimal('mc_amount1', 64)->nullable();
        $this->fields->decimal('mc_amount2', 64)->nullable();
        $this->fields->decimal('mc_amount3', 64)->nullable();
        $this->fields->string('password', 24);
        $this->fields->string('period1');
        $this->fields->string('period2');
        $this->fields->string('period3');
        $this->fields->string('reattempt', 1);
        $this->fields->integer('recur_times')->nullable();
        $this->fields->string('recurring', 1);
        $this->fields->dateTime('retry_at', 6)->nullable()->html('datetime');
        $this->fields->dateTime('subscr_date', 6)->nullable()->html('datetime');
        $this->fields->dateTime('subscr_effective', 6)->nullable()->html('datetime');
        $this->fields->string('subscr_id', 19);
        $this->fields->string('username', 64);
        $this->fields->dateTime('case_creation_date', 6)->nullable()->html('datetime');
        $this->fields->string('case_id');
        $this->fields->string('case_type');
        $this->fields->string('receipt_id');
        $this->fields->string('currency_code', 32);
        $this->fields->decimal('handling_amount', 64)->nullable();
        $this->fields->string('transaction_subject', 256);
        $this->fields->char('ipaddress', 39)->nullable();
        $this->fields->boolean('flag')->html('switch')->default(false);
        $this->fields->string('flag_code', 16);
        $this->fields->longText('flag_info');
        $this->fields->longText('query');
        $this->fields->longText('response');
        $this->fields->string('from_view', 6)->nullable();
        $this->fields->string('mp_id', 128)->nullable();
        $this->fields->string('option_selection1', 200);
        $this->fields->string('option_selection2', 200);

    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['txn_id', 'mc_gross', 'mc_currency', 'payment_status', 'payment_date'];
        $structure['form'] = [
            ['label' => 'Paypal IPN Data', 'class' => 'col-span-full', 'fields' => ['txn_id', 'mc_gross', 'mc_currency', 'payment_status', 'payment_date', 'payer_email', 'address_country', 'address_city', 'address_street', 'address_zip', 'address_country_code', 'address_name', 'address_state', 'address_status', 'contact_phone', 'first_name', 'last_name', 'payer_business_name', 'payer_id', 'auth_amount', 'auth_exp', 'auth_id', 'auth_status', 'exchange_rate', 'invoice', 'item_name', 'item_number', 'mc_fee', 'mc_handling', 'mc_shipping', 'memo', 'num_cart_items', 'option_name1', 'option_name2', 'payer_status', 'payment_gross', 'payment_type', 'pending_reason', 'protection_eligibility', 'quantity', 'reason_code', 'remaining_settle', 'settle_amount', 'settle_currency', 'shipping', 'shipping_method', 'tax', 'transaction_entity', 'auction_buyer_id', 'auction_closing_date', 'auction_multi_item', 'for_auction', 'amount', 'amount_per_cycle', 'initial_payment_amount', 'next_payment_date', 'outstanding_balance', 'payment_cycle', 'period_type', 'product_name', 'product_type', 'profile_status', 'recurring_payment_id', 'rp_invoice_id', 'time_created', 'amount1', 'amount2', 'amount3', 'mc_amount1', 'mc_amount2', 'mc_amount3', 'password', 'period1', 'period2', 'period3', 'reattempt', 'recur_times', 'recurring', 'retry_at', 'subscr_date', 'subscr_effective', 'subscr_id', 'username', 'case_creation_date', 'case_id', 'case_type', 'receipt_id', 'currency_code', 'handling_amount', 'transaction_subject', 'ipaddress', 'flag', 'flag_code', 'flag_info', 'query', 'response', 'from_view', 'mp_id', 'option_selection1', 'option_selection2']],
        ];
        $structure['filter'] = ['txn_id', 'mc_gross', 'mc_currency', 'payment_status', 'payment_date'];
        return $structure;
    }

    /**
     * Define rights for this model.
     *
     * @return array
     */
    public function rights(): array
    {
        $rights = parent::rights();

        $rights['staff'] = ['view' => true];
        $rights['registered'] = ['view' => true];
        $rights['guest'] = [];

        return $rights;
    }
}
