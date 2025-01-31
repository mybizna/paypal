<?php

use Illuminate\Support\Facades\Route;

use Modules\Account\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/paypal/return', [PaymentController::class, 'paypalReturn'])->name('payment.paypal.return');
Route::post('/payment/paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('payment.paypal.cancel');
Route::post('/payment/paypal/notify', [PaymentController::class, 'paypalNotify'])->name('payment.paypal.notify');
