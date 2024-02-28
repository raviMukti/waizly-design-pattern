<?php

namespace App\Services;
use App\Dto\OrderCreateRequest;
use App\Services\Strategy\Factory\PaymentFactory;

class OrderService
{

    // public function create(OrderCreateRequest $request)
    // {
    //     if($request->getPaymentMethod() == 'bank_transfer')
    //     {
    //         // do bank transfer mungkin kirim via event ke broker
    //         // allocate stock
    //         // create order
    //         // notify buyer, seller mungkin kirim via event ke broker

    //         // Kode ini dipersingkat jika tidak, mungkin ada 100 lebih baris

    //         return [
    //             "message" => "Payment BANK_TRANSFER Success"
    //         ];
    //     }
    //     elseif($request->getPaymentMethod() == 'virtual_account')
    //     {
    //         // do virtual_account mungkin kirim via event ke broker
    //         // allocate stock
    //         // create order
    //         // notify buyer, seller mungkin kirim via event ke broker

    //         // Kode ini dipersingkat jika tidak, mungkin ada 100 lebih baris

    //         return [
    //             "message" => "Payment VIRTUAL_ACCOUNT Success"
    //         ];
    //     }
    //     elseif($request->getPaymentMethod() == 'credit_card')
    //     {
    //         // do credit_card mungkin kirim via event ke broker
    //         // allocate stock
    //         // create order
    //         // notify buyer, seller mungkin kirim via event ke broker

    //         // Kode ini dipersingkat jika tidak, mungkin ada 100 lebih baris

    //         return [
    //             "message" => "Payment CREDIT_CARD Success"
    //         ];
    //     }
    // }

    public function create(OrderCreateRequest $request)
    {
        $order = PaymentFactory::setPayment($request->getPaymentMethod());
        return [
            "message" => $order->pay()
        ];
    }
}
