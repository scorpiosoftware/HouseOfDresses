<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Collection;
use Livewire\Component;

class Categorywithimage extends Component
{
    public $collections;
    public function mount(){
        $this->collections = Collection::all();
    }
    public function render()
    {
        return view('livewire.categorywithimage');
    }
}
