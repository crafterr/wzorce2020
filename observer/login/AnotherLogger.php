<?php

namespace wzorce\observer\login;
use wzorce\observer\login\observer\LoginObserver;

class AnotherLogger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();

        if ($status) {
            print __CLASS__ . ":    wysyłam nastepna wiadomosc\n";
        }
    }

}