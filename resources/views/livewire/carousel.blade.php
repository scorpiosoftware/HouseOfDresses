<div id="controls-carousel" class="relative w-full overflow-x-hidden" data-carousel="static">
    <div class="absolute {{ $position }}">
        <h1 class=" md:text-5xl font-bold text-white dancing-script">{{ $record->category->name_en }}</h1>
   </div>
    <!-- Carousel wrapper -->
    <div class="relative md:h-[60rem] h-[26rem] overflow-x-hidden">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            @if ($record->images->count() > 0)
           {{-- {{  dd($record->images()->first()->url) }} --}}
            <img src="{{ URL::to('storage/'.$record->images()->first()->url) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
            @else
            <img src="{{ URL::to('media/new/'.$url) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
            @endif
        </div>
        <!-- Item 2 -->
        {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            @if ($record->images->count() > 0)
            <img src="{{ URL::to('storage/'.$record->images->first()) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
            @else
            <img src="{{ URL::to('media/new/'.$url) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
            @endif     
           </div> --}}
    </div>
</div>
