<?php


namespace wzorce\composite\renderable;


class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }

}