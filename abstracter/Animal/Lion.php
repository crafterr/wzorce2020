<?php


namespace wzorce\abstracter\Animal;


class Lion extends Animal
{
    protected $speed = 10;

    public function roar()
    {
        return 'roararrara';
    }

}