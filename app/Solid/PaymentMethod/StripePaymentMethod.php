<?php

namespace App\Solid\PaymentMethod;

class StripePaymentMethod implements PaymentMethodInterface
{

    public function makePayment(): string
    {
        return 'Stripe payment';
    }
}
