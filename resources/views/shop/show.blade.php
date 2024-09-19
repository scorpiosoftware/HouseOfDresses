@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="md:flex justify-start items-start mx-auto">
            <div class="hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center md:grid md:grid-cols-1 md:max-h-[46rem] md:gap-y-2 gap-x-2 p-3 ">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-20 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="w-96 mx-auto">
                <img src="{{ URL::to('storage/' . $record->images()->first()->image_url) }}" class="rounded-lg" alt="">
            </div>
            <div class="md:hidden md:overflow-y-auto overflow-x-auto flex justify-center items-center gap-x-2 px-4 py-2">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-28 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="px-6 md:w-1/2">
                <p class="text-xl">{{ $record->product->name_en }}</p>
                <a href="/" class="text-lg font-semibold text-gray-600">HOD</a>
                <p class="text-lg text-gray-600">ADE {{ $record->product->price }}</p>
                <div class="flex flex-wrap justify-start items-center space-x-1">
                    <img src="{{ URL::to('media/new/visa.jpg') }}" class="w-12" alt="">
                    <img src="{{ URL::to('media/new/mastercard.jpg') }}" class="w-12" alt="">
                    <img src="{{ URL::to('media/new/pay.jpg') }}" class="w-12" alt="">
                    <img src="{{ URL::to('media/new/tabby.jpg') }}" class="w-12" alt="">
                </div>
                <div class="flex justify-start items-center space-x-1 mt-10">
                      @foreach ($record->product->colors as $color )
                          <a href="/shop/{{ $color->id }}" class="rounded-full border-2 px-4 py-4 bg-[{{ $color->color }}]"></a>
                      @endforeach
                </div>

                <livewire:addtocart :product="$record->product" :color="$record">
            </div>
        </div>
    </div>
@endsection
