<?php


namespace wzorce\composite\listitem;


abstract class Container extends Item
{
    protected $items = [];

    public function getComposite()
    {
        return $this;
    }
    public function items()
    {
        return $this->items;
    }

    public function addItem(Item $item)
    {
        if (in_array($item, $this->items, true)) {
            return;
        }
        array_push($this->items, $item);
    }

    public function removeItem(Item $item)
    {
        $inx = array_search($item,$this->items,true);

        if (is_int($inx)) {
            array_splice($this->items,$inx,1,[]);
        }
    }

}