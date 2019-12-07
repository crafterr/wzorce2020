<?php


namespace wzorce\strategy\painter;
use wzorce\strategy\painter\strategy\StrategyInterface;

class HomePainter
{
    private $painters;

    public function __construct(array $painters)
    {
        $this->painters = $painters;
    }

    public function start(string $section): ?string
    {
        /** @var StrategyInterface $painter */
        foreach ($this->painters as $painter) {
            if ($painter->validate($section)) {
                return $painter->paint();
            }
        }

        return null;
    }
}