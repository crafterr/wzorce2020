<?php


namespace wzorce\builder\example;


use wzorce\builder\example\parts\Vehicle;

class Director
{
    public function build(Builder $builder):Vehicle {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addWheel();
        $builder->addEngine();

        return $builder->getVehicle();
    }
}