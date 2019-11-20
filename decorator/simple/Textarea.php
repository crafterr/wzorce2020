<?php


namespace wzorce\decorator\simple;


class Textarea extends Element
{


    public function render(): string
    {
        return '<textarea name="'.$this->name.'"></textarea>';
    }

}