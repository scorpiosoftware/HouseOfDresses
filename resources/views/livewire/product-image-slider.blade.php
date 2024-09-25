<div class="relative w-96 mx-auto">
    <img src="{{ URL::to('storage/' . $current) }}"  class="rounded-lg" alt="">
    <div class="absolute top-0 left-0 w-full h-full flex justify-between items-center ">
           <button class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center"><</button>
           <button wire:click='next()' class="rounded-full px-4 py-2 hover:bg-white hover:bg-opacity-75 text-[#b69357] font-bold text-3xl text-center" >></button>
    </div>
</div>
