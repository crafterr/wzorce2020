<?php


namespace wzorce\strategy\behavioral\state;


abstract class Mood
{
    public abstract function insult(Person $contex);

    public abstract function hug(Person $contex);

    public abstract function getName(Person $contex, string $name);
}