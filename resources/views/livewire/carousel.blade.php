<div id="controls-carousel" class="relative w-full overflow-x-hidden" data-carousel="static">
    <div class="absolute {{ $position }}">
        <h1 class="md:text-8xl text-3xl font-bold text-white dancing-script">{{ $record->title }}</h1>
    </div>
    <!-- Carousel wrapper -->
    <div class="relative md:h-[60rem] h-[26rem] overflow-x-hidden">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            @if ($record->images->count() > 0)
                <form action="{{ route('filter.products.category') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" class="hidden" name="category" value="{{ $record->category->id }}">
                    <button> <img src="{{ URL::to('storage/' . $record->images()->first()->url) }}"
                            class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                            alt="...">
                    </button>
                </form>
            @else
                <img src="{{ URL::to('media/new/' . $url) }}"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                    alt="...">
            @endif
        </div>
    </div>
</div>
