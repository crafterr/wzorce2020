<?php


namespace wzorce\decorator\component;


class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }


}