<?php

namespace wzorce\strategy\dzialania\strategy;
class MinusCount implements CountInterface
{
    public function count(int $a, int $b)
    {
        return $a - $b;
    }


}