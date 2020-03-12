<?php

namespace wzorce\builder\example\parts;

abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    public function setPart(string $key, Vehicle $value) {
        $this->data[$key] = $value;
    }

    public function getData() {
        return $this->data;
    }
}