<div class="mb-10">
    <div class="text-center md:text-4xl text-2xl text-white font-bold p-6 drop-shadow-2xl dancing-script">@if(session('lang')=='en') Our Collections @else مجموعتنا @endif</div>
    <div class="max-w-[1850px] mx-auto flex justify-center items-center space-x-2 overflow-x-auto py-2">
        @foreach ($collections as $collection)
            <div class="relative">
                <form action="{{ route('filter.products') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit">
                        <input type="text" name="collection" class="hidden" value="{{ $collection->id }}">
                        <img class=" w-full" src="{{ URL::to('storage/' . $collection->image_url) }}" alt="">
                        <div class="absolute top-0 w-full h-full ">
                            <div
                                class="absolute top-1/2 flex items-center justify-center text-wrap w-full text-center md:text-3xl text-sm font-bold text-white transition-all delay-0 hover:scale-110">
                               @if(session('lang')=='en')
                                {{ $collection->name_en }}
                                
                                @else
                                {{ $collection->name_ar }}
                                @endif
                            </div>
                        </div>
                    </button>
                </form>

            </div>
        @endforeach
    </div>
</div>
