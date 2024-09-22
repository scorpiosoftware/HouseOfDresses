@extends('layouts.home')
@section('content')
    <div id="success_alert_cart"
        class="hidden fixed top-0 z-50 w-full flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 d:bg-gray-800 d:text-green-400 d:border-green-800"
        role="alert">
        {{-- <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg> --}}
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> item added to cart.
        </div>
    </div>
    <div id="success_alert_wishtlist"
        class="hidden fixed top-0 z-50 w-full flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 d:bg-gray-800 d:text-green-400 d:border-green-800"
        role="alert">
        {{-- <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg> --}}
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
    <div class="max-w-6xl mx-auto mt-10">
        <div class="md:flex justify-start items-start mx-auto">
            <div
                class="hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center md:grid md:grid-cols-1 md:max-h-[46rem] md:gap-y-2 gap-x-2 p-3 ">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-20 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="w-96 mx-auto">
                <img src="{{ URL::to('storage/' . $record->main_image_url) }}" class="rounded-lg" alt="">
            </div>
            <div class="md:hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center gap-x-2 px-4 py-2">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-28 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="px-6 md:w-1/2">
                <livewire:addtocart :product="$record->product" :color="$record">

                    <div id="accordion-collapse" data-accordion="collapse" class="mt-10"
                        data-active-classes="bg-white text-[#b69357]">
                        {{-- item 1 --}}
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="text-[#b69357]">Description</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-[#b69357]">
                                <p class="mb-2 text-[#b69357]">
                                    {!! $record->product->description_en !!}
                                </p>
                            </div>
                        </div>

                        {{-- item 2 --}}
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                aria-controls="accordion-collapse-body-2">
                                <span class="text-[#b69357]">Model Measurements</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-[#b69357]">
                                <p class="mb-2 text-[#b69357]">
                                    {!! $record->product->description_en !!}
                                </p>
                            </div>
                        </div>

                        {{-- item 2 --}}
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                aria-controls="accordion-collapse-body-2">
                                <span class="text-[#b69357]">Model Measurements</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-[#b69357]">
                                <p class="mb-2 text-[#b69357]">
                                    {!! $record->product->description_en !!}
                                </p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
