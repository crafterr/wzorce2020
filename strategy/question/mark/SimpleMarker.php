<?php
namespace wzorce\strategy\question\mark;

class SimpleMarker extends Marker
{

    public function mark(string $response): bool
    {
        return true;
    }

}