<?php


namespace wzorce\composite\units;


use wzorce\composite\units\unit\Unit;

class Army
{
    /**
     * @var array
     */
    private $units = [];

    /**
     * @param Unit $unit
     */
    public function addUnit(Unit $unit) {
        array_push($this->units, $unit);
    }

    /**
     * @return int
     */
    public function bombardStrength(): int {
        $ret = 0;
        /**
         * @var Unit $unit
         */
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}