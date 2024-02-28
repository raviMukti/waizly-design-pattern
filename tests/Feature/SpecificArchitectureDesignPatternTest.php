<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SpecificArchitectureDesignPatternTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->refreshDatabase();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * test get product by name should be ok
     * @runInSeparateProcess
     */
    public function test_get_product_by_name_should_be_ok()
    {
        /** @var Product $product */
        $product = Product::factory()
                ->state([
                    "name" => "etawalin"
                ])
                ->createOne();

        $response = $this->getJson("/api/products/search?name=".$product->name);

        $response->assertSuccessful();
    }

    /**
     * test get product by sku should be ok
     * @runInSeparateProcess
     */
    public function test_get_product_by_sku_should_be_ok()
    {
        /** @var Product $product */
        $product = Product::factory()
                ->state([
                    "sku" => "ABC"
                ])
                ->createOne();

        $response = $this->getJson("/api/products/search?sku=".$product->sku);

        $response->assertSuccessful();
    }

}
