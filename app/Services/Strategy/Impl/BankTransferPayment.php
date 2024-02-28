<?php

namespace App\Services\Strategy\Impl;
use App\Services\Strategy\Base\PaymentBase;

class BankTransferPayment implements PaymentBase
{

    public function pay(): string
    {
        // do bank_transfer mungkin kirim via event ke broker
        // allocate stock
        // create order
        // notify buyer, seller mungkin kirim via event ke broker

        // Kode ini dipersingkat jika tidak, mungkin ada 100 lebih baris

        return 'Payment BANK_TRANSFER Success';
    }
}
