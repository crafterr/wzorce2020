<?php


namespace wzorce\strategy\question\mark;


abstract class Marker
{
    protected $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    abstract public function mark(string $response): bool;

}