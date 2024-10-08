<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paypal_ipn', function (Blueprint $table) {
            $table->id();

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

            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paypal_ipn');
    }
};
