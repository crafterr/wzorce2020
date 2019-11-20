<?php


namespace wzorce\decorator\tile;


class Forest extends Tile
{
    /**
     * bogactwo na forest = 6
     * @var int
     */
    private $wealthfactor = 6 ;

    /**
     * @return int
     */
    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }



}