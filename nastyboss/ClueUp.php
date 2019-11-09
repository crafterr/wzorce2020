<?php


namespace wzroce\nastyboss;


use wzorce\nastyboss\Employee;

class ClueUp extends Employee
{
    public function fire()
    {
        print "{$this->name}: Zadzwonię do adwokata\n";
    }

}