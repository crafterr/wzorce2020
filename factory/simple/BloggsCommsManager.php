<?php


namespace wzorce\factory\simple;


class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "Nagłówek Bloggs Cal <br />";
    }

    public function getApptEncoder()
    {
        return new BlogApptEncoder();
    }

    public function getFooterText(): string
    {
        return "Stopka Bloggs Cal <br />";
    }

}