<?php


namespace wzorce\observer\user;


class AddToMailSth extends UserObserver
{
    public function changeMail(User $user)
    {
        $email = $user->getEmail();
        print $email . ":   zmieniam maila na @innego\n";
    }

}