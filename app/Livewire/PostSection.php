<?php

namespace App\Livewire;

use Livewire\Component;

class PostSection extends Component
{
    public $posts;
    public $textcolor;
    public function render()
    {
        return view('livewire.post-section');
    }
}
