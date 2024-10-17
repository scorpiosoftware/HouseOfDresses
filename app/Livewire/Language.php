<?php

namespace App\Livewire;

use Livewire\Component;

class Language extends Component
{
    public function setLang($locale){
        session()->forget('lang');
        session()->put('lang',$locale);
        $this->dispatch('change-lang'); 
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.language');
    }
}
