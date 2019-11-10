<?php


namespace wzorce\factory\abstractfactory;


class BloggsContactEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie Contact <br />";

    }

}