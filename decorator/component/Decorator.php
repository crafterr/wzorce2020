<?php


namespace wzorce\decorator\component;


abstract class Decorator implements Component
{
    /**
     * @var Component
     */
    protected $component;

    /**
     * Decorator constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}