<?php


namespace wzorce\decorator\booking\rooms;


class SingleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'single room';
    }

}