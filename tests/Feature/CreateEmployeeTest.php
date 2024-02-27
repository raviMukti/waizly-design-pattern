<?php

namespace Tests\Feature;

use App\Dto\Builder\EmployeeRequestBuilder;
use App\Dto\Employee;
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
        $employee = new EmployeeRequest("Abed", 30, "a@b.com", "Cairo"); // Bakalan effort banget kalo ada perubahan

        $this->assertStringContainsString("Abed", $employee->name);
    }

    /**
     * test create employee with builder
     */
    public function test_create_employee_with_builder()
    {
        $employee = (new EmployeeRequestBuilder())
                        ->setName("Abed")
                        ->setAge(30)
                        ->setEmail("a@b.com")
                        ->setAddress("Cairo")
                        ->build();

        $this->assertStringContainsString("Abed", $employee->getName());
    }

    /**
     * test create employee with no factory
     */
    public function test_create_employee_with_no_factory()
    {
        $employeeEngineer = new Employee("Abed", "Engineer", 8000000);
        $employeeManager = new Employee("Nego", "Manager", 10000000);
        $employeeHod = new Employee("Negi", "HOD", 12000000); // Padahal cuman beda nama role doang, dan rawan salah input

        $this->assertStringContainsString("Engineer", $employeeEngineer->getRole());
        $this->assertStringContainsString("Manager", $employeeManager->getRole());
        $this->assertStringContainsString("HOD", $employeeHod->getRole());
    }

    
}
