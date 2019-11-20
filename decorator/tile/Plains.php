<?php


namespace wzorce\decorator\tile;


class Plains extends Tile
{
    /**
     * bogactwo na równinch = 2
     * @var int
     */
    private $wealthfactor = 2 ;

    /**
     * @return int
     */
    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }

}