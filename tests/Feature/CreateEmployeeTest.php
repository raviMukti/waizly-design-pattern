<?php

namespace Tests\Feature;

use App\Dto\EmployeeRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateEmployeeTest extends TestCase
{
    /**
     * test create employee with constructor
     */
    public function test_create_employee_with_constructor()
    {
        $employee = new EmployeeRequest("Abed", 30, "a@b.com", "Cairo");

        $this->assertStringContainsString("Abed", $employee->name);
    }

}
