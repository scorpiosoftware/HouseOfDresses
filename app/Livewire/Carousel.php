<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $url;
    public $title;
    public $position;
    public function render()
    {
        return view('livewire.carousel');
    }
}
