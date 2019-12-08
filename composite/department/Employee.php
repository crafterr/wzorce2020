<?php


namespace wzorce\composite\department;


class Employee implements Budgeted
{
    private $name;
    private $salary;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $salary
     */
    public function __construct(string $name, string $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateBudget(): int
    {
        return $this->salary;
    }

}