<?php


namespace wzorce\visitor\units;


use wzorce\visitor\units\unit\Unit;

abstract class CompositeUnit extends Unit
{
    public function textDump($num = 0): string
    {
        $txtout = parent::textDump($num);
        foreach ($this->units as $unit) {
            $txtout .= $unit->textDump($num + 1);
        }
        return $txtout;

    }
}