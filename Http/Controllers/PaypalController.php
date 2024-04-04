<?php

namespace Modules\Paypal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Replace with your PaymentProcessor class
use Illuminate\Support\Facades\Response; // Replace with your Paypal class
use Illuminate\Support\Facades\View; // Replace with your DBManager class
use Modules\Core\Classes\DBManager;
use Modules\Paypal\Entities\Paypal;

class PaypalController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Payment",
        ];

        return view('payment.index', $data);
    }

    public function paypalReturn(Request $request)
    {
        $paypal = new Paypal();
        $db_manager = new DBManager();

        $payment = $paypal->paymentPaypalReturn($request);

        $response = $request->input('response');
        if ($response == 'json') {
            $message = 'Payment was Successful';
            $newpayment = $db_manager->serialModel($payment);
            $responseData = ['status' => 200, 'message' => $message, 'payment' => $newpayment];
            return Response::json($responseData);
        }

        if ($payment->next_to) {
            return Redirect::to($payment->next_to);
        } else {
            return Redirect::route('user_payment_list');
        }
    }

    public function paypalCancel(Request $request)
    {
        $paypal = new Paypal();
        $db_manager = new DBManager();

        $payment = $paypal->paymentPaypalCancel($request);

        $response = $request->input('response');
        if ($response == 'json') {
            $message = 'Payment was Cancelled';
            $newpayment = $db_manager->serialModel($payment);
            $responseData = ['status' => 200, 'message' => $message, 'payment' => $newpayment];
            return Response::json($responseData);
        }

        if ($payment->next_to) {
            return Redirect::to($payment->next_to);
        } else {
            return Redirect::route('user_payment_list');
        }
    }

    public function paypalNotify(Request $request)
    {
        $paypal = new Paypal();
        $db_manager = new DBManager();

        $payment = $paypal->paymentPaypalNotify($request);

        $response = $request->input('response');
        if ($response == 'json') {
            $message = 'Payment was Successful';
            $newpayment = $db_manager->serialModel($payment);
            $responseData = ['status' => 200, 'message' => $message, 'payment' => $newpayment];
            return Response::json($responseData);
        }

        if ($payment->next_to) {
            return Redirect::to($payment->next_to);
        } else {
            return Redirect::route('user_payment_list');
        }
    }
}
