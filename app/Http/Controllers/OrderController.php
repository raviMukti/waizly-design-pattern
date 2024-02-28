<?php

namespace App\Http\Controllers;

use App\Dto\Builder\OrderCreateRequestBuilder;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function create(Request $request)
    {
        $rawData = $request->all();

        $orderCreateRequest = (new OrderCreateRequestBuilder())
                                    ->setPaymentMethod($rawData['payment_method'])
                                    ->setPaymentVia($rawData['payment_via'])
                                    ->build();

        $order = $this->orderService->create($orderCreateRequest);

        return response()->json($order);
    }
}
