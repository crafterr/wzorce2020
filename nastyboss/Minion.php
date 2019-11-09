<?php


namespace wzorce\nastyboss;


class Minion extends Employee
{
    public function fire()
    {
        print "{$this->name}: spakuje manatki";
    }

}