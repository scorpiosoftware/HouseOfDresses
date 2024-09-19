<?php

namespace App\Livewire;

use App\Actions\Product\ListProduct;
use App\Models\Collection as ModelsCollection;
use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProductSlider extends Component
{
    public  $products;
    public  $collection;
    public function mount(){
        $this->collection = ModelsCollection::first();
        $record = new Product();
        $record = $record->get();
       $this->products =  $record;
    }
    public function render()
    {
        return view('livewire.product-slider');
    }
}
