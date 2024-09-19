<div class="container p-2">
    <div class="horizontal-scrolling-items items-center">
        <div
            class="flex justify-start items-center horizontal-scrolling-items__item space-x-16 text-2xl text-[#b69357]  font-bold">
            @foreach ($categories as $category)
            <a href="" class="hover:text-blue-400">{{ $category->name_en }}</a>
            @endforeach
        </div>
    </div>
</div>