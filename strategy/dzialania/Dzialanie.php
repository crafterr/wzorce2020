<?php

namespace wzorce\strategy\dzialania;
use wzorce\strategy\dzialania\strategy\CountInterface;

class Dzialanie
{
    /**
     * @var int
     */
    private $a;
    /**
     * @var int
     */
    private $b;
    /**
     * @var CountInterface
     */
    private $stategy;

    public function __construct(int $a, int $b, CountInterface $stategy)
    {
        $this->a = $a;
        $this->b = $b;
        $this->stategy = $stategy;
    }

    public function count()
    {
        return $this->stategy->count($this->a,$this->b);
    }

}