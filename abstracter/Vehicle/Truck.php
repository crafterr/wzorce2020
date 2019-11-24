<?php


namespace wzorce\abstracter\Vehicle;


class Truck extends Vehicle
{
    public function brand($name)
    {
        return strtoupper($name);
    }

    public function model($name)
    {
        return $name;
    }

    public function engine($power)
    {
        $this->engine = $power;
        return $this->engine;
    }

}