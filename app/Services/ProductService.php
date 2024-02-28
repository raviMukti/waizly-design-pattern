<?php

namespace App\Services;
use App\Dto\CreateProductRequest;
use App\Dto\UpdateProductRequest;
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

    // public function update(UpdateProductRequest $request, int $id)
    // {
    //     // Find Id
    //     $product = ProductRepository::find($id);
    //     // IF true
    //     if(!empty($product))
    //     {
    //         $product->name = $request->getName();
    //         $product->save();

    //         return response()->json($product);
    //     }
    //     else
    //     {
    //         return response()->json([
    //             "message" => "Product not found"
    //         ], 404);
    //     }
    // }


    public function update(UpdateProductRequest $request)
    {
        // Find Id
        $product = ProductRepository::update(
            ["name" => $request->getName()], $request->getId()
        );

        return response()->json($product);
    }
}
