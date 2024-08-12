<?php

namespace Modules\Paypal\Classes;

use Illuminate\Http\Request;
use Modules\Payment\Classes\PaymentProcessor;
use Modules\Payment\Models\Payment;

class Paypal extends Controller
{
    public function paymentPaypalReturn(Request $request)
    {
        return $this->paymentPaypalNotify($request);
    }

    public function paymentPaypalCancel(Request $request)
    {
        $paymentId = $request->get('payment_id');
        $payment = Payment::find($paymentId);

        $paymentProcessor = new PaymentProcessor();
        $paymentProcessor->cancelTransaction($payment);

        return $payment;
    }

    public function paymentPaypalNotify(Request $request)
    {
        $paymentId = $request->get('payment_id');
        $paypalId = $request->post('paypal_id');
        $payment = Payment::find($paymentId);

        $this->processPaypal($payment, $paypalId);

        return $payment;
    }

    private function processPaypal($payment, $paypalId)
    {
        $paymentProcessor = new PaymentProcessor();

        $payment = $paymentProcessor->getPayment($payment);
        $gateway = $paymentProcessor->getGatewayByName('paypal');
        $deductions = json_decode($payment->deductions, true) ?: [];
        $requiredAmount = $deductions['amount'] ?? $payment->amount;
        $paidAmount = $requiredAmount;

        $payment->type = 'paypal';
        $payment->gateway = $gateway;
        $payment->code = $paypalId;
        $payment->save();

        $paymentProcessor->savePaidAmount($payment, $requiredAmount, $paidAmount);

        $paymentProcessor->successfulTransaction($payment, $payment->code);
    }
}
