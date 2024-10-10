<div class="relative w-86 mx-auto">
    <img src="{{ URL::to('storage/' . $current) }}" wire:model.live="current"  class="rounded-lg object-contain" alt="">
    <div class="absolute top-0 left-0 z-50 w-full h-full flex justify-between items-center ">
           <button wire:click="setNext()" class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center"><</button>
           <button wire:click="setPrevious()" class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center"> > </button>
    </div>
</div>
