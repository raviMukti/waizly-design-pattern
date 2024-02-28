<?php

namespace App\Dto;

class UpdateProductRequest extends DtoAbstract implements DtoInterface
{
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
            "name" => "required",
        ];
    }

    public function configureValidatorMessages(): array
    {
        return [
            "required" => ":attribute is required"
        ];
    }

    public function map(array $data): bool
    {
        $serializable = true;
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
}
