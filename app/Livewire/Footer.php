<?php

namespace App\Livewire;

use App\Models\Collection;
use Livewire\Component;

class Footer extends Component
{
    public $collections;

    public function mount(){
        $this->collections = Collection::all();
    }
    public function render()
    {
        return view('livewire.footer');
    }
}
