<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Sebelum pake repository pattern
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function search(Request $request)
    {
        $name = $request->query("name");
        $sku = $request->query("sku");

        if(!is_null($sku))
        {
            $products = Product::where('sku', $sku)->get();
            return response()->json($products);
        }

        $products = Product::where('name', 'like', "%{$name}%")->get();
        return response()->json($products);
    }
}
