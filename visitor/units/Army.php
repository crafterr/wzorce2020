<?php


namespace wzorce\visitor\units;


use wzorce\visitor\units\unit\Unit;

class Army extends CompositeUnit
{
    /**
     * @var array
     */
    protected $units = [];

    /**
     * @param Unit $unit
     */
    public function addUnit(Unit $unit) {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        array_push($this->units, $unit);
    }

    /**
     * @param Unit $unit
     */
    public function removeUnit(Unit $unit)
    {
        $inx = array_search($unit,$this->units,true);

        if (is_int($inx)) {
            array_splice($this->units,$inx,1,[]);
        }

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

    /**
     * @return array
     */
    public function __toArray() {
        return $this->units;
    }
}