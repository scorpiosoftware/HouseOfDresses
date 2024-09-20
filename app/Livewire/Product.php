<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Product extends Component
{
    public $product;
    public $textcolor;
    #[On('change-currency')] 
    public function render()
    {
        return view('livewire.product');
    }
}
