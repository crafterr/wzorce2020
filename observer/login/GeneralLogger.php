<?php

namespace wzorce\observer\login;
use wzorce\observer\login\observer\LoginObserver;

class GeneralLogger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //dodanie danych do dziennika
        print __CLASS__ . ":    dodanie danych do dziennika\n";
    }

}