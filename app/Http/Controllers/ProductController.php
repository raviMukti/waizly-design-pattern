<?php

namespace App\Http\Controllers;

use App\Dto\Builder\CreateProductRequestBuilder;
use App\Models\Product;
// use App\Repository\ProductRepository;
use App\Repository\Facades\ProductRepository;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    // protected $productRepository;

    // public function __construct(ProductRepository $productRepository)
    // {
    //     $this->productRepository = $productRepository;
    // }

    /**
     * Sebelum pake repository pattern
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    // public function search(Request $request)
    // {
    //     $name = $request->query("name");
    //     $sku = $request->query("sku");

    //     if(!is_null($sku))
    //     {
    //         $products = Product::where('sku', $sku)->get();
    //         return response()->json($products);
    //     }

    //     $products = Product::where('name', 'like', "%{$name}%")->get();
    //     return response()->json($products);
    // }

    // public function search(Request $request)
    // {
    //     $name = $request->query("name");
    //     $sku = $request->query("sku");

    //     if(!is_null($sku))
    //     {
    //         $products = $this->productRepository->findBySku($sku);
    //         return response()->json($products);
    //     }

    //     $products = $this->productRepository->findByName($name);
    //     return response()->json($products);
    // }

    /**
     * After facades
     */
    public function search(Request $request)
    {
        $name = $request->query("name");
        $sku = $request->query("sku");

        if(!is_null($sku))
        {
            $products = ProductRepository::where(
                [
                    ["sku", "=", $sku]
                ]
            )->first();

            return response()->json($products);
        }

        $products = ProductRepository::where(
                [
                    ["name", "=", $name]
                ]
        )->first();

        return response()->json($products);
    }

    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'sku' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'stock' => 'required',
    //     ]);

    //     $product = ProductRepository::create($request->all());

    //     return response()->json($product);
    // }

    // public function create(Request $request)
    // {
    //     $product = $this->productService->create($request);
    //     return response()->json($product);
    // }

    public function create(Request $request)
    {
        $rawData = $request->all();

        $createProductRequest = (new CreateProductRequestBuilder())
                                        ->setName($rawData['name'])
                                        ->setSku($rawData['sku'])
                                        ->setDescription($rawData['description'])
                                        ->setPrice($rawData['price'])
                                        ->setStock($rawData['stock'])
                                        ->build();

        $product = $this->productService->create($createProductRequest);
        
        return response()->json($product);
    }
}
