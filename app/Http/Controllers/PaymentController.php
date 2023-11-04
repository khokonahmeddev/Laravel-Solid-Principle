<?php

namespace App\Http\Controllers;

use App\Solid\PaymentService;
use Exception;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(protected PaymentService $service)
    {

    }

    /**
     * @throws Exception
     */
    public function payment(): string
    {
        $paymentService = $this->service->initializePayment('paypal');
        return $paymentService->makePayment();
    }
}
