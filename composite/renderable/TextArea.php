<?php


namespace wzorce\composite\renderable;


class TextArea implements Renderable
{
    public function render(): string
    {
        return '<textarea></textarea>';
    }

}