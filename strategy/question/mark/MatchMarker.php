<?php


namespace wzorce\strategy\question\mark;


class MatchMarker extends Marker
{
    public function mark(string $response): bool
    {
        return ($this->test==$response);
    }

}