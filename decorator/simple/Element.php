<?php

namespace wzorce\decorator\simple;
abstract class Element
{
    protected $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract public function render(): string;
}