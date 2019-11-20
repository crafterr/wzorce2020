<?php

namespace wzorce\decorator\simple;
abstract class ElementDecorator extends Element
{
    protected $element;

    public function __construct(Element $element)
    {
        $this->element = $element;
    }
}