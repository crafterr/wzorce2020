<?php


namespace wzorce\visitor\units\unit;


use wzorce\visitor\units\Army;
use wzorce\visitor\units\ArmyVisitor;

abstract class Unit
{
    public function addUnit(Unit $unit) {
        throw new UnitException(get_class($this). ' to liść');
    }

    public function removeUnit(Unit $unit) {
        throw new UnitException(get_class($this). ' to liść');
    }

    abstract public function bombardStrength(): int;

    public function textDump($num = 0): string
    {
        $txtout = "";
        $pad = 4*$num;
        $txtout .= sprintf("%{$pad}s", "");
        $txtout .= get_class($this).": ";
        $txtout .= "siła rażenia: ".$this->bombardStrength()."\n";
        return $txtout;
    }

    public function accept(ArmyVisitor $visitor) {
        $refthis = new \ReflectionClass(get_class($this));
        $method = "visit.".$refthis->getShortName();
        $visitor->$method($this);
    }

    /**
     * @param $depth
     */
    protected function setDepth($depth)
    {
        $this->depth=$depth;
    }

    /**
     * @return mixed
     */
    public function getDepth()
    {
        return $this->depth;
    }

}