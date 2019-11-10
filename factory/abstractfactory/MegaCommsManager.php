<?php


namespace wzorce\factory\abstractfactory;


class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "Nagłówek Mega Cal <br />";
    }

    /**
     * @param int $flag_int
     * @return MegaApptEncoder|MegaContactEncoder|MegaTtdEncoder
     */
    public function make(int $flag_int)
    {
        switch ($flag_int) {
            case self::APPT:
                return new MegaApptEncoder();
            case self::TTD:
                return new MegaTtdEncoder();
            case self::CONTACT:
                return new MegaContactEncoder();
        }
    }

    public function getFooterText(): string
    {
        return "Stopka Mega Cal <br />";
    }

}