<div id="controls-carousel" class="relative w-full overflow-x-hidden" data-carousel="static">
    <div class="absolute {{ $position }}">
        <h1 class=" md:text-5xl font-bold text-white dancing-script">{{ $title }}</h1>
   </div>
    <!-- Carousel wrapper -->
    <div class="relative h-96 md:h-[800px] overflow-x-hidden">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::to('media/new/'.$url) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ URL::to('media/new/'.$url) }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0" alt="...">
        </div>
    </div>
</div>
