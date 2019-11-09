<?php
namespace wzorce\nastyboss;

class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }


}