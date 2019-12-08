<?php


namespace wzorce\visitor\units;


use wzorce\visitor\units\unit\Unit;

abstract class ArmyVisitor
{
    abstract public function visit(Unit $unit);


}