<?php

namespace App\Models;

class ShoppingCart
{
//    use HasFactory;

    public $items = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($oldShoppingCart) {
        if ($oldShoppingCart) {
            $this->items = $oldShoppingCart->items;
            $this->totalQuantity = $oldShoppingCart->totalQuantity;
            $this->totalPrice = $oldShoppingCart->totalPrice;
        }
    }

    public function add($item, $id) {
        $newItem = ['item' => $item, 'price' => $item->price, 'quantity' => 0];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $newItem = $this->items[$id];
            }
        }
        $newItem['price'] = $item->price * $newItem['quantity'];
        $newItem['quantity']++;
        $this->items[$id] = $newItem;
        $this->totalPrice += $item->price;
        $this->totalQuantity++;
    }
}
