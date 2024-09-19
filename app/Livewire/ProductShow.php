<?php

namespace App\Livewire;

use App\Models\Collection;
use App\Models\Color;
use App\Models\Size;
use Livewire\Component;

class ProductShow extends Component
{
    public $products;
    public $sizes;
    public $colors;
    public $collections;
    public $selected_sizes;
    public function mount(){
        $this->sizes = Size::all();
        $this->colors = Color::all();
        $this->collections = Collection::all();
    }
    public function render()
    {
        return view('livewire.product-show');
    }
}
