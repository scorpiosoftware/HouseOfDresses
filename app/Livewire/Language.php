<?php

namespace App\Livewire;

use Livewire\Component;

class Language extends Component
{
    public function setLang($locale){
        session()->forget('lang');
        session()->put('lang',$locale);
        $this->dispatch('change-lang'); 
        return redirect()->back()->with('success','Language set to' . $locale);
    }
    public function render()
    {
        return view('livewire.language');
    }
}
