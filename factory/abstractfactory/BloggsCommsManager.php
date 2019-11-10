<?php


namespace wzorce\factory\abstractfactory;


class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "Nagłówek Bloggs Cal <br />";
    }

    /**
     * @param int $flag_int
     * @return BloggsApptEncoder|BloggsContactEncoder
     */
    public function make(int $flag_int)
    {
        switch ($flag_int) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
        }
    }


    public function getFooterText(): string
    {
        return "Stopka Bloggs Cal <br />";
    }

}