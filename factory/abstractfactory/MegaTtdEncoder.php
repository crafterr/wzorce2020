<?php


namespace wzorce\factory\abstractfactory;


class MegaTtdEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie MegaTtd <br />";

    }

}