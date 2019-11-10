<?php


namespace wzorce\factory\simple;


class BlogApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Dane spotkania zakodowane w formacie BloggsCal <br />";

    }

}