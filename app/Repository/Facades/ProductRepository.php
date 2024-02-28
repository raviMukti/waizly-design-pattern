<?php

namespace App\Repository\Facades;
use Illuminate\Support\Facades\Facade;

class ProductRepository extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Repository\ProductRepository::class;
    }
}
