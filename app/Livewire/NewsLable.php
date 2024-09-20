<?php

namespace App\Livewire;

use Livewire\Component;

class NewsLable extends Component
{

    public function setCurrency($currency){
        session()->forget('currency');
        session()->put('currency',$currency);
        $this->dispatch('change-currency'); 
    }
    public function render()
    {
        return view('livewire.news-lable');
    }
}
