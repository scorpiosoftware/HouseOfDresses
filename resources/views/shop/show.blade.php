@extends('layouts.home')
@section('content')
    <div id="success_alert_cart"
        class="hidden fixed top-0 z-50 w-full flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 d:bg-gray-800 d:text-green-400 d:border-green-800"
        role="alert">

        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> item added to cart.
        </div>
    </div>
    <div id="success_alert_wishtlist"
        class="hidden fixed top-0 z-50 w-full flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 d:bg-gray-800 d:text-green-400 d:border-green-800"
        role="alert">
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> item added to wishlist.
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#success_alert").hide();
            $("#add_to_cart_btn").click(function(e) {
                $("#success_alert_cart").fadeIn(200).show(200).delay(2000).queue(function(n) {
                    $(this).fadeOut(200).hide(200);
                    n();
                });
            });

            $("#wishlist_btn").click(function(e) {
                $("#success_alert_wishtlist").fadeIn(200).show(200).delay(2000).queue(function(n) {
                    $(this).fadeOut(200).hide(200);
                    n();
                });
            });
        });
    </script>
    <div class="flex justify-center items-center text-center">
        <h1 class="underline-offset-8 underline text-[#b69357] md:text-2xl text-xl">
            {{$record->product->collection->name_en}} - COLLECTION
        </h1>
    </div>
    <div class="max-w-6xl mx-auto mt-10">

        <div class="md:flex justify-start items-start mx-auto">

            <div
                class="hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center md:grid md:grid-cols-1 md:max-h-[36rem] md:gap-y-2 gap-x-2 p-3 ">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-20 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <livewire:product-image-slider :record='$record'>
            <div class="md:hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center gap-x-2 px-4 py-2">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-28 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="px-6 md:w-1/2">
                <livewire:addtocart :product="$record->product" :color="$record">


            </div>
        </div>
    </div>
@endsection
