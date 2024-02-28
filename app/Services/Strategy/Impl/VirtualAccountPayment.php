<?php

namespace App\Services\Strategy\Impl;
use App\Services\Strategy\Base\PaymentBase;

class VirtualAccountPayment implements PaymentBase
{

    public function pay(): string
    {
        // do virtual_account mungkin kirim via event ke broker
        // allocate stock
        // create order
        // notify buyer, seller mungkin kirim via event ke broker

        // Kode ini dipersingkat jika tidak, mungkin ada 100 lebih baris

        return 'Payment VIRTUAL_ACCOUNT Success';
    }
}
