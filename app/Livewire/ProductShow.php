<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Livewire\Component;

class ProductShow extends Component
{
    public $products;
    public $sizes;
    public $categories;
    public $colors;
    public $collections;
    public $selected_sizes;
    public $selected_categories;
    public $selected_colors;
    public $selected_collection;
    public function mount(){
        // $this->products = Product::all();
        $this->sizes = Size::all();
        $this->colors = Color::all();
        $this->categories = Category::all();
        $this->collections = Collection::all();
    }
    public function filter(){
        $this->products = Product::all();
        if($this->selected_categories != null){
            $this->products = Category::with('products')->find($this->selected_categories)->products()->get();
        }
        if($this->selected_colors != null){
            $this->products = Color::with('products')->find($this->selected_colors)->product()->get();
        }
        if($this->selected_collection != null){
            $this->products = Product::where("collection_id" , $this->selected_collection)->get();
        }
        if($this->selected_collection != null){
            $this->products = Product::where("collection_id" , $this->selected_collection)->get();
        }
        $this->dispatch('refreshHeader'); 
    }
    public function render()
    {
        return view('livewire.product-show');
    }
}
