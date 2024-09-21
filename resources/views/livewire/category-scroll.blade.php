<div class="container p-2">
    <div class="horizontal-scrolling-items items-center">
        <div
            class="flex justify-start items-center horizontal-scrolling-items__item space-x-16 text-2xl text-[#b69357]  font-bold">
            @foreach ($categories as $category)
            <form action="{{ route('filter.products.category') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" class="hidden" name="category" value="{{ $category->id }}">
                <button type="submit">{{ $category->name_en }}</button>
            </form>
            {{-- <a href="" class="hover:text-blue-400">{{ $category->name_en }}</a> --}}
            @endforeach
        </div>
    </div>
</div>