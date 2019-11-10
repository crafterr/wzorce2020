<?php


namespace wzorce\factory\simple;


class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie MegaCal <br />";

    }

}