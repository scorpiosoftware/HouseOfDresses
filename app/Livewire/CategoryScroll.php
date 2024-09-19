<?php

namespace App\Livewire;

use App\Actions\Category\ListCategory;
use App\Models\Category;
use Livewire\Component;

class CategoryScroll extends Component
{
    public $categories;
    public function mount(){
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.category-scroll');
    }
}
