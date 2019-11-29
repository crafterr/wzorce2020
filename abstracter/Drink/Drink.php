<?php

namespace wzorce\abstracter\Drink;
abstract class Drink
{
    public function make() {
        return $this
            ->addHotWater()
            ->addSugar()
            ->addMilk()
            ->addPrimaryToppings();
    }

    protected function addHotWater() {
        print_r('Pour hot water into cup <br />');
        return $this;
    }

    protected function addSugar() {
        print_r('Add proper amount of sugar <br />');
        return $this;
    }

    protected function addMilk() {
        print_r('Add proper amount of Milk <br />');
        return $this;
    }

    protected abstract function addPrimaryToppings();
}