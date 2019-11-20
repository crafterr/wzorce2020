<?php

namespace wzorce\decorator\simple;
class TextAreaDecorator extends ElementDecorator
{
    public function render(): string
    {
       return '<label>adsfasfasdas</label>'.$this->element->render();
    }

}