<?php


namespace wzorce\composite\units\unit;


abstract class Unit
{
    public function addUnit(Unit $unit) {
        throw new UnitException(get_class($this). ' to liść');
    }

    public function removeUnit(Unit $unit) {
        throw new UnitException(get_class($this). ' to liść');
    }

    abstract public function bombardStrength(): int;
}