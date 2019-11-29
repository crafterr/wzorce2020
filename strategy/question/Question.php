<?php
namespace wzorce\strategy\question;

use wzorce\strategy\question\mark\Marker;

abstract class Question
{
    protected $prompt;

    /**
     * @var Marker
     */
    protected $marker;

    public function __construct(string $prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    public function mark(string $response): bool
    {
        return $this->marker->mark($response);
    }
}