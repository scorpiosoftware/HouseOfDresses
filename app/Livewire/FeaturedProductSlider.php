<?php

namespace App\Livewire;

use App\Models\Collection;
use App\Models\Product;
use Livewire\Component;

class FeaturedProductSlider extends Component
{
    public  $products;
    public  $collection;
    public function mount(){
        $this->collection = Collection::first();
        $record = new Product();
        $record = $record->get();
        $this->products =  $record;
    }
    public function render()
    {
        return view('livewire.featured-product-slider');
    }
}
