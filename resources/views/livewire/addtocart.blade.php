<div>
    <div class="mt-10">
        <p>Size : {{$selected_size}}</p>
        {{--  onclick='this.classList.add("bg-[#b69357]","text-white","font-bold")' --}}
        <div class="flex justify-start items-center space-x-2">
            @foreach ($color->product->sizes as $size)
                <button id="size_btn"
                    wire:click="setSize('{{$size->name}}')" wire:model="selected_size" onclick='this.classList.add("bg-[#b69357]","text-white","font-bold")' class="px-4 py-2.5 border @if($selected_size == $size->name) bg-[#b69357] text-white font-bold @endif">{{ $size->name }}</button>
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
        <button id="add_to_cart_btn" wire:click='addToCart()' class="py-3 w-full rounded-lg hover:bg-gray-500 text-white font-bold">Add to
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
            $(document).ready(function(){

                $('#wishlist_btn').click(function(){

                     $("#wishlist_svg").attr("fill",'#b69357')

                });

            });
        </script>
    </div>
</div>
