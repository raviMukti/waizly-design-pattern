<?php

namespace App\Dto;

class CreateProductRequest extends DtoAbstract implements DtoInterface
{

    protected $name;

    protected $sku;

    protected $description;

    protected $price;

    protected $stock;

    protected $attributes;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes = $attributes;
    }

    public function configureValidatorRules(): array
    {
        return [
            "name" => "required",
            "sku" => "required",
            "description" => "required",
            "price" => "required",
            "stock" => "required",
        ];
    }

    public function configureValidatorMessages(): array
    {
        return [
            "required" => ":attribute is required",
        ];
    }

    public function map(array $data): bool
    {
        $serializable = true;
        isset($data["name"]) ? $this->name = $data["name"] : $serializable = false;
        isset($data["sku"]) ? $this->sku = $data["sku"] : $serializable = false;
        isset($data["description"]) ? $this->description = $data["description"] : $serializable = false;
        isset($data["price"]) ? $this->price = $data["price"] : $serializable = false;
        isset($data["stock"]) ? $this->stock = $data["stock"] : $serializable = false;
        return $serializable;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of sku
     */
    public function getSku()
    {
        return $this->sku;
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
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
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
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock($stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set the value of attributes
     */
    public function setAttributes($attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
