<?php

namespace App\Dto;

class OrderCreateRequest extends DtoAbstract implements DtoInterface
{
    private $paymentMethod;

    private $paymentVia;

    protected $attributes;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes = $attributes;
    }

    public function configureValidatorRules(): array
    {
        return [
            "payment_method" => "required|in:bank_transfer,virtual_account,credit_card",
            "payment_via" => "required"
        ];
    }

    public function configureValidatorMessages(): array
    {
        return [
            "in" => ":attribute is invalid",
            "required" => ":attribute is required"
        ];
    }

    public function map(array $data): bool
    {
        $serializable = true;
        isset($data['payment_method']) ? $this->setPaymentMethod($data['payment_method']) : $serializable = false;
        isset($data['payment_via']) ? $this->setPaymentVia($data['payment_via']) : $serializable = false;
        return $serializable;
    }

    /**
     * Get the value of paymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get the value of paymentVia
     */
    public function getPaymentVia()
    {
        return $this->paymentVia;
    }

    /**
     * Set the value of paymentVia
     */
    public function setPaymentVia($paymentVia): self
    {
        $this->paymentVia = $paymentVia;

        return $this;
    }
}
