<div>
    <p class="text-xl">{{ $color->product->name_en }} - {{ $color->name }}</p>
    <a href="/" class="text-lg font-semibold text-gray-600">HOD</a>
    <p class="text-lg text-gray-600">
        @if (session('currency') == 'ade')
            AED {{ $color->product->price2 }}
        @else
            USD {{ $color->product->price }}
        @endif
    </p>
    <div class="flex flex-wrap justify-start items-center space-x-1">
        <img src="{{ URL::to('media/new/visa.jpg') }}" class="w-12" alt="">
        <img src="{{ URL::to('media/new/mastercard.jpg') }}" class="w-12" alt="">
        <img src="{{ URL::to('media/new/pay.jpg') }}" class="w-12" alt="">
        <img src="{{ URL::to('media/new/tabby.jpg') }}" class="w-12" alt="">
    </div>
    <div class="flex justify-start items-center space-x-1 mt-10">
        @foreach ($color->product->colors as $color)
            <a href="/shop/{{ $color->id }}" class="rounded-full border-2 px-4 py-4 bg-[{{ $color->color }}]"></a>
        @endforeach
    </div>
    <div class="mt-10">
        <p>Size : {{ $selected_size }}</p>
        {{--  onclick='this.classList.add("bg-[#b69357]","text-white","font-bold")' --}}
        <div class="flex justify-start items-center space-x-2">
            @foreach ($color->product->sizes as $size)
                <button id="size_btn" wire:click="setSize('{{ $size->name }}')" wire:model="selected_size"
                    onclick='this.classList.add("bg-[#b69357]","text-white","font-bold")'
                    class="px-4 py-2.5 border @if ($selected_size == $size->name) bg-[#b69357] text-white font-bold @endif">{{ $size->name }}</button>
            @endforeach
        </div>
    </div>
    <div class="mt-10">
        <label for="qty" class="font-bold text-gray-600">QUANTITY</label>
        <input type="number" wire:model.live="qty"
            class="w-16 h-8 py-4 mx-6 shrink-0 border rounded-md border-gray-300 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0"
            placeholder="" name="qty"
            @if (session('cart') && !empty($cart[$color->id]['quantity'])) value="{{ $cart[$color->id]['quantity'] }}"  
             @else
             value='1' @endif
            min="{!! $color->minimum_quantity !!}" max="{!! $color->maximum_quantity !!}" />
    </div>

    <div class="flex justify-center items-center w-full bg-[#b69357] mt-10">
        <button id="add_to_cart_btn" wire:click='addToCart()'
            class="py-3 w-full rounded-lg hover:bg-gray-500 text-white font-bold">Add to
            Cart</button>
    </div>

    <div class="flex justify-center items-center w-full bg-[] mt-10">
        <button id='wishlist_btn' wire:click='addToWishlist()'>
            <div class="flex items-center justify-center space-x-2">
                <svg id="wishlist_svg" class="frcp-wishlist__icon" width="20px" height="20px" fill="white"
                    stroke="#b69357" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    viewBox="0 0 24 24">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg>
                <span class="font-bold text-base text-[#b69357]">Add to wishlist</span>
            </div>
        </button>
        <script>
            $(document).ready(function() {

                $('#wishlist_btn').click(function() {

                    $("#wishlist_svg").attr("fill", '#b69357')

                });

            });
        </script>
    </div>
    <div id="accordion-collapse" data-accordion="collapse" class="mt-10" data-active-classes="bg-white text-[#b69357]">
        {{-- item 1 --}}
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                aria-controls="accordion-collapse-body-1">
                <span class="text-[#b69357]">Description</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-[#b69357]">
                <p class="mb-2 text-[#b69357]">
                    {!! $color->product->description_en !!}
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
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 border border-b-0 border-[#b69357]">
                <p class="mb-2 text-[#b69357]">
                <div class="container mx-auto flex justify-center items-center">
                    <img src="{{ URL::to('img/s.jpeg') }}" class="w-32" alt="">
                    <table>
                        <thead>
                            <tr>
                                <th class="border-2 border-black p-4"></th>
                                <th class="border-2 border-black">Measure all around Please</th>
                                <th class="border-2 border-black">INCHES</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">A</td>
                                <td class="px-2 ">
                                    <label for="bust">BUST</label>
                                </td>
                                <td class="px-2 py-1"><input id="bust" wire:model='bust' name="bust"
                                        type="text"></td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">B</td>
                                <td class="px-2">
                                    <label for="waist">WAIST</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="waist" wire:model='waist' name="waist" type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">C</td>
                                <td class="px-2">
                                    <label for="hips">HIPS</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="hips" name="hips" wire:model='hips' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">D</td>
                                <td class="px-2">
                                    <label for="neck">NECK</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="neck" name="neck" wire:model='neck' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">E</td>
                                <td class="px-2">
                                    <label for="chest">CHEST</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="chest" name="chest" wire:model='chest' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">F</td>
                                <td class="px-2">
                                    <label for="shoulder">SHOULDER</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="shoulder" name="shoulder" wire:model='shoulder' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">G</td>
                                <td class="px-2">
                                    <label for="sleeve">SLEEVE</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="sleeve" name="sleeve" wire:model='sleeve' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">H</td>
                                <td class="px-2">
                                    <label for="shoulder_waist">SHOULDER TO WAIST</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="shoulder_waist" name="shoulder_waist" wire:model='shoulder_waist'
                                        type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">I</td>
                                <td class="px-2">
                                    <label for="shoulder_floor">SHOULDER TO FLOOR</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="shoulder_floor" name="shoulder_floor" wire:model='shoulder_floor'
                                        type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">J</td>
                                <td class="px-2">
                                    <label for="arm_hole">ARM HOLE</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="arm_hole" name="arm_hole" wire:model='arm_hole' type="text">
                                </td>
                            </tr>
                            <tr class="border-2 border-black">
                                <td class="text-center border-2 border-black">K</td>
                                <td class="px-2">
                                    <label for="upper_arm">UPPER ARM</label>
                                </td>
                                <td class="px-2 py-1">
                                    <input id="upper_arm" name="upper_arm" wire:model='upper_arm' type="text">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </p>
            </div>
        </div>

        {{-- item 3 --}}
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                aria-controls="accordion-collapse-body-3">
                <span class="text-[#b69357]">Shipping & Delivery Info</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5 border border-b-0 border-[#b69357]">
                <p class="mb-2 text-[#b69357]">
                    {!! $shipping !!}
                </p>
            </div>
        </div>

        {{-- item 4 --}}
        <h2 id="accordion-collapse-heading-4">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                aria-controls="accordion-collapse-body-4">
                <span class="text-[#b69357]">Returns & Exchanger Info</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
            <div class="p-5 border border-b-0 border-[#b69357]">
                <p class="mb-2 text-[#b69357]">
                    {!! $exchange !!}
                </p>
            </div>
        </div>
        {{-- item 5 --}}
        <h2 id="accordion-collapse-heading-5">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-[#b69357] border border-b-0 border-[#b69357] rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 gap-3"
                data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                aria-controls="accordion-collapse-body-5">
                <span class="text-[#b69357]">Have any questions ?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
            <div class="p-5 border border-b-0 border-[#b69357]">
                <p class="mb-2 text-[#b69357]">
                    {{-- {!! $color->product->description_en !!} --}}
                </p>
            </div>
        </div>
    </div>
</div>
