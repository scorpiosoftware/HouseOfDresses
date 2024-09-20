<div class="flex justify-start items-center space-x-4 ">
    <div class="md:w-64 w-44 ">
        <a href="{{ route('shop.show', $product->colors()->first()->id) }}">
            <div class="relative">
                <img class="relative mx-auto md:w-64 w-56 object-cover rounded-lg"
                    src="{{ URL::to('storage/' . $product->colors()->first()->main_image_url) }}" alt="">
                    @if($product->colors->count() > 0 && $product->colors->first()->images->count() > 0 )
                    <img class="absolute top-0 mx-auto w-full  opacity-0 transition-opacity delay-150 hover:opacity-100 rounded-lg"
                    src="  {{ URL::to('storage/' . $product->colors()->first()->images()->first()->image_url) }}"
                    alt="">
                    @endif
            </div>
        </a>
        <h3 class="text-center {{$textcolor}}  font-bold text-xl underline leading-loose underline-offset-8 drop-shadow-2xl">
            {{ $product->categories()->first()->name_en }}</h3>
        <h3 class="text-center text-[#b69357] font-bold text-lg">{{ $product->name_en }}</h3>
        <h3 class="text-center"><span class="text-[#b69357] font-bold text-lg" data-amount="799">
            @if(session('currency') == 'ade')
            ADE {{ $product->price2 }}
            @else
            USD {{ $product->price}}
            @endif
                
            </h3>
        <div class="flex justify-center items-center space-x-3">
            <ul data-option-index="0" class="flex items-center justify-center space-x-2 py-2">
                @foreach ($product->sizes as $size)
                    <li data-option-title="S"
                        class="px-2 border-2 bg-white text-[#b69357] font-bold rounded-lg hover:text-white hover:bg-[#b69357]">
                        <a href="{{ route('shop.show', $product->colors()->first()->id) }}">{{ strtoupper($size->name) }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
