<?php


namespace wzorce\nastyboss;


abstract class Employee
{
    protected $id;

    protected $name;

    public function __construct(string $name)
    {
        $this->id = spl_object_id($this);
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }



    abstract public function fire();
}