<?php


namespace wzorce\strategy\painter\strategy;


class YellowPainterStrategy implements StrategyInterface
{
    public function validate(string $section): bool
    {
        return ($section=='yellow');
    }

    public function paint(): string
    {
        return 'koloruj na yellow';
    }

}