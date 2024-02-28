<?php

namespace App\Services\Strategy\Base;

interface PaymentBase
{
    public function pay(): string;
}
