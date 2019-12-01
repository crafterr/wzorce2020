<?php

namespace wzorce\strategy\behavioral\state;

class Person implements PersonInterface
{
    /**
     * @var Mood
     */
    private $currentMood;

    /**
     * @var string
     */
    private $name;

    /**
     * Person constructor.
     * @param Mood $mood
     * @param string $name
     */
    public function __construct(Mood $mood, string $name)
    {
        $this->currentMood = $mood;
        $this->name = $name;
    }

    /**
     *
     */
    public function insult()
    {
        $this->currentMood->insult($this);
    }

    public function getName()
    {
        $this->currentMood->getName($this,$this->name);
    }

    public function hug()
    {

        $this->currentMood->hug($this);
    }

    public function say(string $msg)
    {
        echo $msg . "\n";
    }

    public function setState(Mood $mood)
    {
        $this->currentMood = $mood;
    }


}