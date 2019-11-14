<?php


namespace wzorce\factory\civilization;


use wzorce\factory\civilization\forest\Forest;
use wzorce\factory\civilization\plain\Plain;
use wzorce\factory\civilization\sea\Sea;

class TerrainFactory
{
    private $sea;

    private $plain;

    private $forest;

    /**
     * TerrainFactory constructor.
     * @param Sea $sea
     * @param Plain $plain
     * @param Forest $forest
     */
    public function __construct(Sea $sea, Plain $plain, Forest $forest)
    {
        $this->sea = $sea;
        $this->plain = $plain;
        $this->forest = $forest;
    }

    public function getSea() {
        return clone $this->sea;
    }

    public function getPlain() {
            return clone $this->plain;
    }

    public function getForest() {
        return clone $this->forest;
    }


}