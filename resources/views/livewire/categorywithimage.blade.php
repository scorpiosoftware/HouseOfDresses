<div class="">


    <div class="text-center text-4xl text-white font-bold p-6 drop-shadow-2xl dancing-script">OUR COLLECTION</div>
    <div class="max-w-full mx-auto flex justify-center items-center space-x-2 overflow-x-auto py-2">
        @foreach ($collections as $collection)
            <div class="relative">
                <a href="/shop">
                    <img class="" src="{{ URL::to('storage/' . $collection->image_url) }}" alt="">
                    <div class="absolute top-0 w-full   h-full ">
                        <div
                            class="absolute top-1/2 flex items-center justify-center w-full text-center md:text-3xl text-sm font-bold text-white">
                            {{ $collection->name_en }}</div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
</div>
