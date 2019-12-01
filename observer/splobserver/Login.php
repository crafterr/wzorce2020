<?php


namespace wzorce\observer\splobserver;


use SplObserver;

class Login implements \SplSubject
{

    private $storage;

    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;


    private $status = [];

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        /**
         * @var SplObserver $obs
         */
       foreach ($this->storage as $obs) {
           $obs->update($this);
       }
    }


    public function handleLogin(string $user, string $pass, string $ip)
    {
        switch (rand(1,3)) {
            case 1:
                $this->setStatus(self::LOGIN_USER_UNKNOWN,$user,$ip);
                $isValid = false;
                break;

            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS,$user,$ip);
                $isValid = false;
                break;

            case 3:
                $this->setStatus(self::LOGIN_ACCESS,$user,$ip);
                $isValid = true;
                break;



        }

        $this->notify();

        return $isValid;
    }

    public function setStatus(int $status, string $user, string $ip)
    {
        $this->status = [$status,$user,$ip];
    }

    public function getStatus()
    {
        return $this->status;
    }
}