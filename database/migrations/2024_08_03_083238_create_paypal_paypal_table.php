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
        Schema::create('paypal_paypal', function (Blueprint $table) {
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

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paypal_paypal');
    }
};
