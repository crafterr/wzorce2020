<?php


namespace wzorce\decorator\booking\rooms;


interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}