<?php


namespace wzorce\observer\user;


use SplSubject;

abstract class UserObserver implements \SplObserver
{
    /**
     * @var User[]
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;

    }

    public function update(SplSubject $subject)
    {
      if ($subject == $this->user) {
            $this->changeMail($subject);
      }
    }

    public abstract function changeMail(User $user);


}