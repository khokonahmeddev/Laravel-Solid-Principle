<?php

namespace App\Http\Controllers;

use App\Solid\PaymentService;
use Exception;
use Illuminate\Http\Request;

class PaymentController extends Controller
{


    /**
     * @throws Exception
     */
    public function payment(): string
    {
        $paymentService = new PaymentService();
        $payment = $paymentService->initializePayment('stripe');
        return $payment->makePayment();
    }
}
