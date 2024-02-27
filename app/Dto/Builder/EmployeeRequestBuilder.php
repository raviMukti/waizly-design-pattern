<?php

namespace App\Dto\Builder;
use App\Dto\EmployeeRequest;

class EmployeeRequestBuilder
{
    private $name;

    private $age;

    private $email;

    private $address;

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }


    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    public function build(): EmployeeRequest
    {
        return new EmployeeRequest(
            $this->name,
            $this->age,
            $this->email,
            $this->address
        );
    }
}
