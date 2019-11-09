<?php


namespace wzorce\strategy\output;


class JsonOutput implements OutputInterface
{
    public function load()
    {
        return __CLASS__;
    }

}