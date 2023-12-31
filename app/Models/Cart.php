<?php

namespace App\Models;

class Cart
{
    public $items = [];
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];
        if (array_key_exists($id, $this->items)) {
            $storedItem = $this->items[$id];
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function reduce($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']->price;
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']->price;

        if ($this->items[$id]['qty']<=0)
        {
            unset($this->items[$id]);
        }
        if ($this->totalQty<=0)
        {
            unset($this->totalQty);
        }
        if ($this->totalPrice<=0)
        {
            unset($this->totalPrice);
        }
    }

    public function remove($id)
    {
        $this->totalPrice -= $this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
