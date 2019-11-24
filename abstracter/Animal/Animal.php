<?php

namespace wzorce\abstracter\Animal;
abstract class Animal
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function roar();

}