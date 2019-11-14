<?php


namespace wzorce\composite\renderable;


class Button implements Renderable
{
    private $caption = '';
    public function __construct(string $caption)
    {
        $this->caption = $caption;
    }

    public function render(): string
    {
        return '<input type="submit" value="'.$this->caption.'">';
    }
}