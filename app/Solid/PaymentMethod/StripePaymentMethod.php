<?php

namespace App\Solid\PaymentMethod;

class StripePaymentMethod implements PaymentMethodInterface
{

    public function makePayment()
    {
        return 'Stripe payment';
    }
}
