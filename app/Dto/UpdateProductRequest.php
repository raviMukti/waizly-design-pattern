<?php

namespace App\Dto;

class UpdateProductRequest extends DtoAbstract implements DtoInterface
{
    private $id;

    private $name;

    private $description;

    protected $attributes;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes = $attributes;
    }

    public function configureValidatorRules(): array
    {
        return [
            "id" => "required|exists:products,id",
            "name" => "required",
        ];
    }

    public function configureValidatorMessages(): array
    {
        return [
            "exists" => "Product not found",
            "required" => ":attribute is required"
        ];
    }

    public function map(array $data): bool
    {
        $serializable = true;
        isset($data["id"]) ? $this->id = $data["id"] : $serializable = false;
        isset($data["name"]) ? $this->name = $data["name"] : $serializable = false;
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
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
