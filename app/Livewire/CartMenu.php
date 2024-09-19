<?php

namespace App\Livewire;

use Livewire\Component;

class CartMenu extends Component
{

    protected $listeners = ['refreshCart' =>'$refresh'];

    public function render()
    {
        return view('livewire.cart-menu');
    }
}
