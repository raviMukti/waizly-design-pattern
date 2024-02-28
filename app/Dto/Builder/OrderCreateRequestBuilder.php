<?php

namespace App\Dto\Builder;
use App\Dto\OrderCreateRequest;

class OrderCreateRequestBuilder
{
    private $paymentMethod;

    private $paymentVia;

    /**
     * Set the value of paymentMethod
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }


    /**
     * Set the value of paymentVia
     */
    public function setPaymentVia($paymentVia): self
    {
        $this->paymentVia = $paymentVia;

        return $this;
    }

    public function build(): OrderCreateRequest
    {
        return new OrderCreateRequest([
            "payment_method" => $this->paymentMethod,
            "payment_via" => $this->paymentVia
        ]);
    }
}
