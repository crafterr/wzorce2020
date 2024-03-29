<?php
namespace wzorce\observer\login\observer;

interface Observable
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
}