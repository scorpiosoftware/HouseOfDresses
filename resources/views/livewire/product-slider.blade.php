<div class="">
    <div class=" flex flex-wrap justify-center md:justify-start items-center">
        <form action="{{ route('shop.index') }}">
            <input class="hidden" type="text" name="collection" value="@if(!empty($collection)){{$collection->name_en}}@endif">
            <button type="submit" class="text-white ml-5 bg-[#b69357] px-3.5 py-2 rounded-xl leading-relaxed font-bold md:text-xl text-sm">SHOP NOW</button>
        </form>
        {{-- <a href="/shop"></a> --}}
    </div>
    <div class="text-center mx-auto md:text-4xl text-2xl basis-1/2 text-white font-bold drop-shadow-2xl pt-4 dancing-script">BEST SELLER</div>
    <div class="flex md:justify-center justify-start items-start space-x-3 overflow-x-auto mt-10 max-w-screen-2xl mx-auto">
        @foreach ($products as $product)
        <livewire:product :product='$product' textcolor='text-white' lazy> 
        @endforeach
    </div>
</div>

