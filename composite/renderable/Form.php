<?php


namespace wzorce\composite\renderable;


class Form implements Renderable
{
    private $elements = [];

    public function addElement(Renderable $element) {
        array_push($this->elements, $element);
    }

    public function render(): string
    {
        $formCode = '<form>';
        /**
         * @var Renderable $element
         */
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';

        return $formCode;
    }

}