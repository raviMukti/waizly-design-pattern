<?php

namespace App\Repository;
use App\Models\Product;

class ProductRepository extends BaseRepository
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * find by name
     */
    public function findByName($name)
    {
        return $this->model->where('name', $name)->first();
    }

    /**
     * find by sku
     */
    public function findBySku($sku)
    {
        return $this->model->where('sku', $sku)->first();
    }
}
