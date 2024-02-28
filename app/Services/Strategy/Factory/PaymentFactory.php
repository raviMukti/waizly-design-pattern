<?php

namespace App\Services\Strategy\Factory;
use App\Services\Strategy\Base\PaymentBase;
use App\Services\Strategy\Impl\BankTransferPayment;
use App\Services\Strategy\Impl\CreditCardPayment;
use App\Services\Strategy\Impl\VirtualAccountPayment;

class PaymentFactory
{
    public static function setPayment(string $payment): PaymentBase
    {
        switch ($payment) {
            case 'credit_card':
                return new CreditCardPayment();
            case 'virtual_account':
                return new VirtualAccountPayment();
            case 'bank_transfer':
                return new BankTransferPayment();
            default:
                throw new \InvalidArgumentException('Invalid payment method');
        }
    }
}
