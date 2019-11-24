<?php


namespace wzorce\decorator\booking;


class Wifi extends BookingDecorator
{
    private const PRICE = 30;

    public function calculatePrice(): int
    {
       return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription().' with  wifi';
    }

}