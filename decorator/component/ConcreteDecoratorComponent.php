<?php

namespace wzorce\decorator\component;
class ConcreteDecoratorComponent extends Decorator
{
    public function operation(): string
    {
        return 'ConcreteDecoratorA '.$this->component->operation();
    }

}