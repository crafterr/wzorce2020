<?php


namespace wzorce\factory\abstractfactory;


class BloggsTtdEncoder implements Encoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie BlogTtd <br />";

    }

}