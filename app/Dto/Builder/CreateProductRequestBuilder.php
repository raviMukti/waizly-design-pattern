<?php

namespace App\Dto\Builder;
use App\Dto\CreateProductRequest;

class CreateProductRequestBuilder
{
    private $name;
    private $sku;
    private $description;
    private $price;
    private $stock;

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Set the value of sku
     */
    public function setSku($sku): self
    {
        $this->sku = $sku;

        return $this;
    }


    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }


    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }


    /**
     * Set the value of stock
     */
    public function setStock($stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function build(): CreateProductRequest
    {
        return new CreateProductRequest([
            'name' => $this->name,
            'sku' => $this->sku,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock
        ]);
    }
}
