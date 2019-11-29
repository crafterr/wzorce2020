<?php


namespace wzorce\abstracter\Drink;


class Coffee extends Drink
{
    protected function addPrimaryToppings()
    {
        print_r('Add proper amount of Coffee <br />');
        return $this;
    }

}