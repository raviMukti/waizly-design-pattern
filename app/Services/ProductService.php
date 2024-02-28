<?php

namespace App\Services;
use App\Repository\Facades\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        return ProductRepository::create($request->all());
    }
}
