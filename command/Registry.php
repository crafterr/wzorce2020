<?php


namespace wzorce\command;


class Registry
{
    private static $instance = null;
    private $request;

    private function __construct()
    {
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getRequest(): Request
    {
        if (is_null($this->request)) {
            $this->request = new Request();
        }
        return $this->request;
    }
}