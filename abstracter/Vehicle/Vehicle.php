<?php

namespace wzorce\abstracter\Vehicle;
abstract class Vehicle
{
    public $engine;

    abstract public function brand($name);

    abstract public function model($name);

    public function color($color) {
        return $color;
    }
}