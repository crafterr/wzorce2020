<?php


namespace wzorce\composite\department;


use SplObjectStorage;

class Department implements BudgetedComposite
{
    private $dependencies;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->dependencies = new SplObjectStorage();
    }

    public function calculateBudget():int
    {
       $total = 0;
        /**
         * @var Budgeted $dependent
         */
       foreach ($this->dependencies as $dependent) {
           $total += $dependent->calculateBudget();
       }
       return $total;
    }

    public function getDependent(): SplObjectStorage
    {
        return $this->dependencies;
    }

    public function addDependent(Budgeted $item): void
    {
        $this->dependencies->attach($item);
    }

}