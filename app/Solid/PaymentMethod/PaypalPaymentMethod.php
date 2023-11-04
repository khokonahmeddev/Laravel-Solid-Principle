<?php

namespace App\Solid\PaymentMethod;

class PaypalPaymentMethod implements PaymentMethodInterface
{

    public function makePayment(): string
    {
        return 'paypal payment';
    }
}
