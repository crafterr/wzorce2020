<?php

namespace wzorce\fasada\system\library;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}