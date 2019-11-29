<?php


namespace wzorce\abstracter\Drink;


class Tea extends Drink
{


    protected function addPrimaryToppings()
    {
        print_r('Add proper amount of tea <br />');
        return $this;
    }

}