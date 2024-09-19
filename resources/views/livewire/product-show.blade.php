<div>
    <div class="max-w-3xl mx-auto border-2  justify-start items-center  px-10 py-2 mt-10">
        <div class="">
            <label for="sizes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sizes</label>
            <div class="relative flex w-full">
                <select id="sizes" name="sizes[]" multiple placeholder="Select Collection..." autocomplete="off"
                    class="block w-full rounded-lg cursor-pointer focus:outline-none">
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach

                </select>
            </div>
            <script>
                new TomSelect('#sizes', {
                    minItems: 1,
                });
            </script>
        </div>
        <div class="">
            <label for="colors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">colors</label>
            <div class="relative flex w-full">
                <select id="colors" name="colors[]" multiple placeholder="Select Collection..." autocomplete="off"
                    class="block w-full rounded-lg cursor-pointer focus:outline-none">
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach

                </select>
            </div>
            <script>
                new TomSelect('#colors', {
                    minItems: 1,
                    maxItems: 100,
                });
            </script>
        </div>
        <div class="">
            <label for="collections"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">collections</label>
            <div class="relative flex w-full">
                <select id="collections" name="collections[]" multiple placeholder="Select Collection..."
                    autocomplete="off" class="block w-full rounded-lg cursor-pointer focus:outline-none">
                    @foreach ($collections as $collection)
                        <option value="{{ $collection->id }}">{{ $collection->name_en }}</option>
                    @endforeach

                </select>
            </div>
            <script>
                new TomSelect('#collections', {
                    minItems: 1,
                    maxItems: 1,
                });
            </script>
        </div>
        <div class="pt-[27px]"><button
                class="border-[#b69357] bg-[#b69357] text-white border-2 px-4 py-[2px]">Apply</button></div>
    </div>

    <div class="max-w-6xl  grid md:grid-cols-4 mt-12 md:mx-auto mx-8 grid-cols-2 gap-x-2">
        @foreach ($products as $product)
            <livewire:product :product='$product'>
                <livewire:product :product='$product'>
                    <livewire:product :product='$product'>
                        <livewire:product :product='$product'>
        @endforeach
    </div>
</div>
