<?php


namespace wzorce\strategy\painter\strategy;


class BluePainterStrategy implements StrategyInterface
{
    public function validate(string $section): bool
    {
        return ($section=='blue');
    }

    public function paint(): string
    {
        return 'koloruj na blue';
    }


}