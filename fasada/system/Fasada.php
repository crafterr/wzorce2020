<?php

namespace wzorce\fasada\system;
use wzorce\fasada\system\library\Bios;
use wzorce\fasada\system\library\OperatingSystem;

class Fasada
{
    /**
     * @var OperatingSystem
     */
    private $operatingSystem;
    /**
     * @var Bios
     */
    private $bios;

    public function __construct(OperatingSystem $operatingSystem, Bios $bios)
    {
        $this->operatingSystem = $operatingSystem;
        $this->bios = $bios;
    }

    public function turnOn() {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->operatingSystem);
    }

    public function turnOff() {
        $this->operatingSystem->halt();
        $this->bios->powerDown();
    }
}