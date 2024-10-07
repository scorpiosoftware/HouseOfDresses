<?php

namespace App\Livewire;

use App\Models\General;
use Livewire\Component;

class NewsLable extends Component
{

    public $title;
    public function mount(){
      $general = General::first();
      if($general){
        $this->title = $general->news_title;
      }
     
    }
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
