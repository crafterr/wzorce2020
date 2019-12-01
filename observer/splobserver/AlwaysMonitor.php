<?php
namespace wzorce\observer\splobserver;


class AlwaysMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
       $status = $login->getStatus();

           //send mail
           print __CLASS__ . ":    wysyłam wiadomość do wszystkich zawsze i wszedzie\n";

    }

}