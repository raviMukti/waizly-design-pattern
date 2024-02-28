<?php

namespace App\Services;
use App\Dto\CreateProductRequest;
use App\Models\Product;
use App\Repository\Facades\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'sku' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'stock' => 'required',
    //     ]);

    //     return ProductRepository::create($request->all());
    // }

    public function create(CreateProductRequest $request)
    {
        // Langsung bisnis proses, gak ada validasi etc

        $product = new Product();
        $product->name = $request->getName();
        $product->sku = $request->getSku();
        $product->description = $request->getDescription();
        $product->price = $request->getPrice();
        $product->stock = $request->getStock();

        $product->save();

        return $product;
    }
}
