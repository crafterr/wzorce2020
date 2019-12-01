<?php


namespace wzorce\strategy\behavioral\state;


class Neutral extends Mood
{
    public function insult (Person $context) {
        $context->say("What the heck do you want?");
        $context->setState(new Angry());
    }
    public function hug (Person $context) {
        $context->say("Thanks");
        $context->setState(new Happy());
    }

    /**
     * @param Person $context
     * @param string $name
     * @return string
     */
    public function getName (Person $context, string $name) {
        $context->say("My name is {$name}");
    }

}