<?php


namespace wzorce\strategy\behavioral\state;


interface PersonInterface
{
    public function insult();

    public function getName();

    public function hug();

    public function say(string $msg);

    public function setState(Mood $mood);
}