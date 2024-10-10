<div class="md:px-0 px-10">
    <div id="filter"
        class="max-w-3xl mx-auto border-2 md:flex md:flex-wrap md:gap-4 justify-start items-center px-10 py-2 mt-10">
        <div class="">
            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900">Categories</label>
            <div class="relative flex w-full">
                <select id="categories" name="categories" wire:model='selected_categories' placeholder="Select Category..."
                    autocomplete="off"
                    class="block w-full border-2 border-[#b69357] p-1 text-xs rounded-lg cursor-pointer focus:outline-none">
                    <option value=""></option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name_en }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="">
            <label for="sizes" class="block mb-2 text-sm font-medium text-gray-900">Sizes</label>
            <div class="relative flex w-full">
                <select id="sizes" name="sizes[]" wire:model='selected_sizes' placeholder="Select Size..."
                    autocomplete="off"
                    class="block w-full border-2 border-[#b69357] p-1 text-xs rounded-lg cursor-pointer focus:outline-none">
                    <option value=""></option>
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="">
            <label for="colors" class="block mb-2 text-sm font-medium text-gray-900">colors</label>
            <div class="relative flex w-full">
                <select id="colors" name="colors[]" wire:model='selected_colors' placeholder="Select Colors..."
                    autocomplete="off"
                    class="block w-full border-2 border-[#b69357] p-1 text-xs rounded-lg cursor-pointer focus:outline-none">
                    <option value=""></option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="">
            <label for="collections" class="block mb-2 text-sm font-medium text-gray-900">collections</label>
            <div class="relative flex w-full">
                <select id="collections" name="collections" wire:model='selected_collection'
                    placeholder="Select Collection..." autocomplete="off"
                    class="block w-full border-2 border-[#b69357] p-1 text-xs rounded-md cursor-pointer focus:outline-none">
                    <option value=""></option>
                    @foreach ($collections as $collection)
                        <option value="{{ $collection->id }}">{{ $collection->name_en }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="pt-[27px]">
            <button wire:click='filter()'
                class="border-[#b69357] bg-[#b69357] text-white border-2 px-4 py-[2px]">Apply</button>
        </div>
    </div>

    <div class="max-w-6xl  grid md:grid-cols-4 items-start mt-12 md:mx-auto mx-8 grid-cols-2 gap-x-2 gap-y-4">
        @foreach ($products as $product)
            @if ($product->colors->count() > 0 && $product->categories->count() > 0)
                <livewire:product :product='$product' textcolor='text-black'>
            @endif
        @endforeach
    </div>


</div>
