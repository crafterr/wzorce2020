<?php


namespace wzorce\observer\login\observer;


interface Observer
{
    public function update(Observable $observable);
}