<?php


namespace wzorce\factory\abstractfactory;


class MegaContactEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie Mega contact <br />";

    }

}