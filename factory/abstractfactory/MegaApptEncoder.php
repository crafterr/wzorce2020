<?php


namespace wzorce\factory\abstractfactory;


class MegaApptEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie MegaCal <br />";

    }

}