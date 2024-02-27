<?php

namespace App\Dto\Factory;
use App\Dto\Employee;

class EmployeeFactory
{
    public static function makeEngineer($name)
    {
        return new Employee($name, "Engineer", 8000000);
    }

    public static function makeManager($name)
    {
        return new Employee($name, "Manager", 10000000);
    }

    public static function makeHod($name)
    {
        return new Employee($name, "HOD", 12000000);
    }
}
