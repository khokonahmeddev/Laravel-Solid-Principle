<?php

namespace App\Solid;

use App\Solid\PaymentMethod\PaymentMethodInterface;

class PaymentService
{

    public function pay(PaymentMethodInterface $paymentMethod)
    {
        return $paymentMethod->makePayment();
    }


}
