@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="flex justify-start items-start">
            <div class="overflow-y-auto grid grid-cols-1 max-h-[98dvh] gap-y-2 p-3">
                @foreach ($record->images as $image)
                    <img class="w-32 mx-auto rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="w-96">
                <img src="{{ URL::to('storage/' . $record->images()->first()->image_url) }}" class="rounded-lg" alt="">
            </div>

            <div class="px-6 w-1/2">
                <p class="text-xl">{{ $record->product->name_en }}</p>
                <a href="/" class="text-lg font-semibold text-gray-600">HOD</a>
                <p class="text-lg text-gray-600">Usd {{ $record->product->price }}</p>
                <div class="flex justify-start items-center space-x-1">
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
