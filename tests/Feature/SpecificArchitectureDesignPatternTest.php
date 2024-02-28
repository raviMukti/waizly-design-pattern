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

    /**
     * test create product should be ok
     * @runInSeparateProcess
     */
    public function test_create_product_should_be_ok()
    {
        $response = $this->postJson("/api/products", [
            "name" => "etawalin",
            "description" => "susu kambing sehat",
            "sku" => "ABC",
            "price" => 10000,
            "stock" => 100
        ]);

        $response->assertSuccessful();
    }

    /**
     * test update product should be ok
     */
    public function test_update_product_should_be_ok()
    {
        /** @var Product $product */
        $product = Product::factory()
                ->state([
                    "name" => "etawalin",
                    "description" => "susu kambing sehat",
                    "sku" => "ABC",
                    "price" => 10000,
                    "stock" => 100
                ])
                ->createOne();

        $response = $this->patchJson("/api/products/{$product->id}", [
            "name" => "etawaku",
            "description" => "susu kambings",
        ]);

        $response->assertSuccessful();
    }

    public function test_update_product_should_not_found()
    {
        /** @var Product $product */
        $product = Product::factory()
                ->state([
                    "name" => "etawalin",
                    "description" => "susu kambing sehat",
                    "sku" => "ABC",
                    "price" => 10000,
                    "stock" => 100
                ])
                ->createOne();

        $response = $this->patchJson("/api/products/0", [
            "name" => "etawaku",
            "description" => "susu kambings",
        ]);

        $response->assertBadRequest();
    }

}
