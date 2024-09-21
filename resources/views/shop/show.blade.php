@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="md:flex justify-start items-start mx-auto">
            <div
                class="hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center md:grid md:grid-cols-1 md:max-h-[46rem] md:gap-y-2 gap-x-2 p-3 ">
                @foreach ($record->images as $image)
                    <img class="md:w-32 w-20 rounded-lg" src="{{ URL::to('storage/' . $image->image_url) }}" alt="">
                @endforeach
            </div>
            <div class="w-96 mx-auto">
                <img src="{{ URL::to('storage/' . $record->images()->first()->image_url) }}" class="rounded-lg" alt="">
            </div>
            <div class="md:hidden md:overflow-y-auto overflow-x-auto flex justify-start items-center gap-x-2 px-4 py-2">
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
                    @foreach ($record->product->colors as $color)
                        <a href="/shop/{{ $color->id }}"
                            class="rounded-full border-2 px-4 py-4 bg-[{{ $color->color }}]"></a>
                    @endforeach
                </div>

                <livewire:addtocart :product="$record->product" :color="$record">

                    <div id="accordion-collapse" data-accordion="collapse">
                        {{-- item 1 --}}
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Description</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    {!! $record->product->description_en !!}
                                </p>
                            </div>
                        </div>

                        {{-- item 2 --}}
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Model Measurements</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and
                                    designed using the Figma software so everything you see in the library has a design
                                    equivalent in our Figma file.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                        href="https://flowbite.com/figma/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                    based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>

                        {{-- item 3 --}}
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>Shipping & Delivery Info</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                    paid product. Another difference is that Flowbite relies on smaller and standalone
                                    components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                    Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping
                                    you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- item 4 --}}
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Returns & Exchanges Info</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden"
                            aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                    paid product. Another difference is that Flowbite relies on smaller and standalone
                                    components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                    Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping
                                    you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
