<?php

namespace wzorce\strategy\dzialania\strategy;
class MultipleCount implements CountInterface
{
    public function count(int $a, int $b)
    {
        $count = $a * $b;
        return "$a * $b = ".$count;
    }


}