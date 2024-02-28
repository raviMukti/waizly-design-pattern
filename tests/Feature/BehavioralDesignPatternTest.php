<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BehavioralDesignPatternTest extends TestCase
{
    /**
     * test order with payment bank transfer should be ok
     */
    public function test_order_with_payment_bank_transfer_should_be_ok()
    {
        $response = $this->postJson("/api/orders", [
            "payment_method" => "bank_transfer",
            "payment_via" => "Bank ABC"
        ]);

        $response->assertSuccessful();
        $response->assertJsonPath("message", "Payment BANK_TRANSFER Success");
    }

    /**
     * test order with payment bank transfer should be ok
     */
    public function test_order_with_payment_virtual_account_should_be_ok()
    {
        $response = $this->postJson("/api/orders", [
            "payment_method" => "virtual_account",
            "payment_via" => "Bank ABC"
        ]);

        $response->assertSuccessful();
        $response->assertJsonPath("message", "Payment VIRTUAL_ACCOUNT Success");
    }

    /**
     * test order with payment bank transfer should be ok
     */
    public function test_order_with_payment_credit_card_should_be_ok()
    {
        $response = $this->postJson("/api/orders", [
            "payment_method" => "credit_card",
            "payment_via" => "Bank ABC"
        ]);

        $response->assertSuccessful();
        $response->assertJsonPath("message", "Payment CREDIT_CARD Success");
    }
}
