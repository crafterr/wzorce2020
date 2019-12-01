<?php
namespace wzorce\observer\login;

use wzorce\observer\login\observer\LoginObserver;

class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
       $status = $login->getStatus();
       if ($status[0] == LOGIN::LOGIN_WRONG_PASS) {
           //send mail
           print __CLASS__ . ":    wysyłam wiadomość do administratora\n";
       }
    }

}