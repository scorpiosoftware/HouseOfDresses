<div id="myCartDropdown1"
    class=" z-50 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg bg-white p-4 antialiased shadow-lg">
    @foreach (session('cart') as $id => $details)
        <div class="grid grid-cols-2 border p-2">
            <div class="">
                <a href="#"
                    class="truncate text-sm font-semibold leading-none text-gray-900 hover:underline">{{ $details['name'] }} - {{$details['color'] }}</a>
                <p class="mt-0.5 truncate text-sm font-normal text-gray-500">
                    {{$details['currency']}} {{ $details['price'] }}</p>
            </div>
            <div class="flex items-end justify-end gap-6">
                <p class="text-sm font-normal leading-none text-gray-500">Qty:
                    {{ $details['quantity'] }}</p>
                <div class="">
                    <button wire:click='removeItem({{ $id }})' data-tooltip-target="tooltipRemoveItem1a"
                        type="submit" class="text-red-600 hover:text-red-700">
                        <span class="sr-only"> Remove </span>
                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="tooltipRemoveItem1a" role="tooltip"
                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 ">
                        Remove item
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                </div>

            </div>
        </div>
    @endforeach
    @if (!empty(session('cart')))
    <div class="mt-20 flex justify-center items-center">
        <a href="{{ route('cart.show') }}" title=""
            class="bg-[#b69357] text-white px-6 py-1 rounded-lg shadow-lg"
            role="button">Checkout</a>
    </div>
    @endif
</div>
