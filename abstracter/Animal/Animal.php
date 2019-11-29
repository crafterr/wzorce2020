<?php

namespace wzorce\abstracter\Animal;
abstract class Animal
{
    protected $name;

    protected $speed = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function roar();

    public function run()
    {
        if (is_null($this->speed)) {
            throw new \Exception("No set speed limit");
        }
        return $this->speed;
    }

}