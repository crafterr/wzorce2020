<?php


namespace wzorce\composite\department;

use SplObjectStorage;

interface BudgetedComposite extends Budgeted
{
    public function calculateBudget():int;

    public function getDependent(): SplObjectStorage;

    public function addDependent(Budgeted $item): void;
}