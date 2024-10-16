<?php

namespace App\Livewire;

use Livewire\Component;

class ProductImageSlider extends Component
{
    public $record;
    public $id;
    public $images;
    public $previous;
    public $current;
    public $next;
    public function mount($record){
        $this->record = $record;
        $this->images = $record->images;
        $this->id = $this->images->first()->id;
        // $this->previous = $record->images()->where('id','<', $this->id)->max('id');
        $this->current = $record->main_image_url;
    }
    public function setNext(){
        if($this->record->images()->where('id','>', $this->id)->first()== null){
            $this->id = $this->images->first()->id;
            $this->current = $this->record->main_image_url;
            return;
        }
        $this->next = $this->record->images()->where('id','>', $this->id)->first()->image_url;
        $this->id = $this->record->images()->where('id','>', $this->id)->first()->id;
        $this->current =  $this->next;    
    }
    public function selectImg(string $url){
        $this->current = $url;    
    }
    public function setPrevious(){
        if($this->record->images()->where('id','<', $this->id)->first() == null){
            $this->id = $this->images->first()->id;
            $this->current = $this->images->first()->image_url;
            return;
        }
        $this->next = $this->record->images()->where('id','<', $this->id)->first()->image_url;
        $this->id = $this->record->images()->where('id','<', $this->id)->first()->id;
        $this->current =  $this->next;    
    }
    public function render()
    {
        return view('livewire.product-image-slider');
    }
}
