<?php


namespace wzorce\decorator\booking\rooms;


class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 20;
    }

    public function getDescription(): string
    {
        return 'double room';
    }

}