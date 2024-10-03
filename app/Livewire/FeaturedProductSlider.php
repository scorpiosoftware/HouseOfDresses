<?php

namespace App\Livewire;

use App\Models\Collection;
use App\Models\Product;
use Livewire\Component;

class FeaturedProductSlider extends Component
{
    public $view;
    public  $products;
    public  $collection;
    public function mount(){
        $this->collection = Collection::find($this->view->collection_id);
        $record = new Product();
        $record = $record->where("collection_id", $this->collection->id);
        $record = $record->get();
        $this->products =  $record;
    }
    public function render()
    {
        return view('livewire.featured-product-slider');
    }
}
