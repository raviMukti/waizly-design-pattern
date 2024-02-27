<?php

namespace App\Dto;

class Employee
{
    protected $name;

    protected $role;

    protected $salary;

    public function __construct($name, $role, $salary)
    {
        $this->name = $name;
        $this->role = $role;
        $this->salary = $salary;
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
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary($salary): self
    {
        $this->salary = $salary;

        return $this;
    }
}
