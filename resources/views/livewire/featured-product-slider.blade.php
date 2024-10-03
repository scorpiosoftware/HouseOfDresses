<main class="container">
    <h2 class="text-[#b69357] font-bold px-6 text-start">{{$collection->name_en}} - COLLECTION</h2>
    <!-- New product slider -->
    <div class="slider-container" id="new-products">
        <div class="slides-wrapper">
            <div class="slides-container">
                <ul class="slider-list">
                    @foreach ($products as $product)
                        @if ($product->colors->count() > 0 && $product->categories->count() > 0)
                            <li class="slider-item">
                                <livewire:product :product='$product' textcolor='text-white' >
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="slider-arrows">
            <button type="button" class="slider-arrow-prev rounded-full px-4 text-xl font-bold bg-transparent text-[#b69357]"><</button>
            <button type="button" class="slider-arrow-next rounded-full px-4 text-xl font-bold bg-transparent text-[#b69357]">></button>
        </div>
    </div>
</main>
