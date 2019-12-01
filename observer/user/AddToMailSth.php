<?php


namespace wzorce\observer\user;


class AddToMailSth extends UserObserver
{
    public function doUpdate(User $user)
    {
        print __CLASS__ . ":   dodaje cos do maila\n";
    }

}