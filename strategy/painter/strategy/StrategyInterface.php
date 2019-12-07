<?php
namespace wzorce\strategy\painter\strategy;
interface StrategyInterface
{
    public function validate(string $section): bool;

    public function paint(): string;
}