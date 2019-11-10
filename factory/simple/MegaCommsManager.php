<?php


namespace wzorce\factory\simple;


class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "Nagłówek Mega Cal <br />";
    }

    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "Stopka Mega Cal <br />";
    }

}