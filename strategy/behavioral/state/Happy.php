<?php


namespace wzorce\strategy\behavioral\state;


class Happy extends Mood
{
    public function insult(Person $contex)
    {
        $contex->say("Oh! That was not nice");
        $contex->setState(new Neutral());

    }

    public function hug(Person $contex)
    {
        return $contex->say("Oh! That perfet");
    }

    public function getName(Person $contex, string $name)
    {
        $contex->say("Oh! Hello dear friend. My name is {$name}");
    }


}