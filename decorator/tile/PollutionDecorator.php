<?php


namespace wzorce\decorator\tile;


class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor()-4;
    }

}