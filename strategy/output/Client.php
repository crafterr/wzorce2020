<?php
namespace wzorce\strategy\output;

/**
 * Class Client
 * @package wzorce\strategy\output
 */
class Client
{
    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * Client constructor.
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @return string
     */
    public function loadOutput() {
        return $this->output->load();
    }
}