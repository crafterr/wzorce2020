<?php


namespace wzorce\decorator\tile;


class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor()+2;
    }

}