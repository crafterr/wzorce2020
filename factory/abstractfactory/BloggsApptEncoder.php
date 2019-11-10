<?php


namespace wzorce\factory\abstractfactory;


class BloggsApptEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie BloggsCal <br />";

    }

}