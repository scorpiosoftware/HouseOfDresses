<div id='cart_element' class="fixed hidden top-0 right-0 z-[60] h-screen w-80 bg-white">
    <div id="cart_content" class="hidden">
        <div class="flex justify-between items-center space-x-3 p-10">
            <button id="close_cart_btn" class="text-xl">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                        fill="#000000" />
                </svg>
            </button>
            <p>My Cart</p>
            
            <div>@if (!empty(session('cart')))
                  {{count(session('cart'))}}
                @else
                0
                @endif
                Item(s)</div>
        </div>
        @if (!empty(session('cart')))
                   <livewire:cart-items>
            @else
            <div class="text-black text-center mt-44 text-xl px-6">Your cart is currently empty.</div>
        @endif
    </div>


    <script>
        $(document).ready(function() {


            $("#cart_btn").click(function(e) {
                $('#cart_element').animate({
                    width: 320
                }).show(500);
                $('#cart_content').animate({
                    width: 320
                }).show(500);
            });

            $("#close_cart_btn").click(function(e) {
                $('#cart_element').animate({
                    width: 0
                }).hide(500);
                $('#cart_content').animate({
                    width: 320
                }).hide(500);
            });

        });
    </script>
</div>
