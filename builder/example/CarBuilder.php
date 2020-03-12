<?php


namespace wzorce\builder\example;


use wzorce\builder\example\parts\Car;
use wzorce\builder\example\parts\Door;
use wzorce\builder\example\parts\Engine;
use wzorce\builder\example\parts\Wheel;

class CarBuilder implements Builder
{
    /**
     * @var Car
     */
    private $car;

    public function addWheel()
    {
        $this->car->setPart('LewePrzednie',new Wheel());
        $this->car->setPart('PrawePrzednie',new Wheel());
        $this->car->setPart('LeweTylnie',new Wheel());
        $this->car->setPart('PraweTylnie',new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('Engine',new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('LewePrzednie',new Door());
        $this->car->setPart('PrawePrzednie',new Door());
        $this->car->setPart('LeweTylnie',new Door());
        $this->car->setPart('PraweTylnie',new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }


}