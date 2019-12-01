<?php


namespace wzorce\observer\user;


class LoggerMail extends UserObserver
{
    public function changeMail(User $user)
    {
       $email = $user->getEmail();
        print __CLASS__ . ":    wysyłam wiadomość do administratora\n";
    }

}