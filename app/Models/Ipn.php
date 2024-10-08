<?php

namespace Modules\Paypal\Models;

use Modules\Base\Models\BaseModel;

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

}
