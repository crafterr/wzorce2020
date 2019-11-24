<?php


namespace wzorce\decorator\booking;


class ExtraBed extends BookingDecorator
{
    private const PRICE = 50;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription().' with extra bed';
    }

}