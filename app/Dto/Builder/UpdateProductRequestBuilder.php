<?php

namespace App\Dto\Builder;
use App\Dto\UpdateProductRequest;

class UpdateProductRequestBuilder
{
    private $id;

    private $name;

    private $description;

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
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
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    public function build(): UpdateProductRequest
    {
        return new UpdateProductRequest([
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description
        ]);
    }

}
