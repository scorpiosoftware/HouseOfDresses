<div class="md:flex justify-start items-start mx-auto">
    <div class="hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center md:grid md:grid-cols-1 md:max-h-[36rem] md:gap-y-2 gap-x-2 p-3  ">
        @foreach ($record->images as $image)
            <img wire:click="selectImg('{{ $image->image_url }}')"  class="md:w-32 w-20 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}"
            alt="">
        @endforeach
    </div>
    <div class="relative w-96 mx-auto">
        <img src="{{ URL::to('storage/' . $current) }}" wire:model.live="current"  class="rounded-lg object-contain" alt="">
        <div class="absolute top-0 left-0 z-50 w-full h-full flex justify-between items-center ">
               <button wire:click="setPrevious()" class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center"><</button>
               <button wire:click="setNext()" class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center"> > </button>
        </div>
    </div>
    <div class="md:hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center gap-x-2 px-4 py-2">
        @foreach ($record->images as $image)
            <img wire:click="selectImg('{{ $image->image_url }}')" class="md:w-32 w-28 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}"
                alt="">
        @endforeach
    </div>
</div>


