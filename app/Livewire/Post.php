<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $url;
    public $post_url;
    public function render()
    {
        return view('livewire.post');
    }
}
