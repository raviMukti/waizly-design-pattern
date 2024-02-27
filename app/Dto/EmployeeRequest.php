<?php

namespace App\Dto;

class EmployeeRequest
{
    public $name;

    public $age;

    public $email;

    public $address;

    public function __construct($name, $age, $email, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->address = $address;
    }

}
