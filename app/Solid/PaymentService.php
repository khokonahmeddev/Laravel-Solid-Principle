<?php

namespace App\Solid;


use App\Solid\PaymentMethod\PaypalPaymentMethod;
use App\Solid\PaymentMethod\StripePaymentMethod;
use Exception;

class PaymentService
{
    /**
     * @throws Exception
     */
    public function initializePayment(string $type): StripePaymentMethod|PaypalPaymentMethod
    {
        if ($type === 'stripe') {
            return new StripePaymentMethod;
        } else if ($type === 'paypal') {
            return new PaypalPaymentMethod();
        }

        throw new Exception('Unsupported payment method');
    }


}
