<?php

namespace App\Livewire;

use Livewire\Component;

class ProductImageSlider extends Component
{
    public $record;
    public $id;
    public $previous;
    public $current;
    public $next;
    public function mount($record){
        $this->record = $record;
        $this->id = $record->images()->first()->id;
        $this->previous = $record->images()->where('id','<', $this->id)->max('id');
        $this->current = $record->main_image_url;
    }

    public function next(){
            $this->next = $this->record->images()->where('id','<', $this->id)->min('id');
            $this->current =  $this->next->image_url;
            dd($this->current); 
    }
    public function render()
    {
        return view('livewire.product-image-slider');
    }
}
