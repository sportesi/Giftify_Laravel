<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct( $oldCart ) {
        if ($oldCart) {
          $this->items = $oldCart->items;
          $this->totalQty = $oldCart->totalQty;
          $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
      $storedItem = ['Qty' => 0, 'prize' => $item->prize, 'item' => $item ];
      if ($this->items) {
        if (array_key_exists($id, $this->items)){
          $storedItem = $this->items[$id];
        }
      }
      $storedItem['Qty']++;
      $storedItem['prize'] = $item->prize * $storedItem['Qty'];
      $this->items[$id] = $storedItem;
      $this->totalQty++;
      $this->totalPrice += $items->prize
    }
}
