<x-app-layout>
    @if (session()->has('success'))
        <div id="alert-border-3"
            class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session()->get('success') }}
            </div>
        </div>
    @endif
    <div class="text-2xl py-4 font-bold underline text-gray-900 dark:text-white">Products</div>
    <!-- Breadcrumb -->
    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('product.index') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Create</span>
                </div>
            </li>
        </ol>
    </nav>
    {{-- End Breadcrumb  --}}
    <form class="pt-4" action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2">
                <div>
                    <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code (Unique)</label>
                    <input type="text" id="code" value="" name="code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="code or barcode (must be unique)" required />
                </div>
                <div>
                    <label for="name_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                        English</label>
                    <input type="text" id="name_en" value="" name="name_en"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="product name" />
                </div>
                <div>
                    <label for="name_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                        Arabic</label>
                    <input type="text" id="name_ar" value="" name="name_ar"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="اسم المنتج" />
                </div>
                <div>
                    <label for="brand_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                    <select id="brand_id" name="brand_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="collection_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Collection</label>
                    <select id="collection_id" name="collection_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($collections as $collection)
                            <option value="{{ $collection->id }}">{{ $collection->name_en }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="in_stock">In stock</option>
                        <option value="out_of_stock">Out of stock</option>
                        <option value="offer">Offer</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="categories"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                    <div class="relative flex w-full">
                        <select id="categories" name="categories[]" multiple  placeholder="Select Collection..."
                            autocomplete="off" class="block w-full rounded-lg cursor-pointer focus:outline-none"
                            >
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                            @endforeach

                        </select>
                    </div>
                    <script>
                        new TomSelect('#categories', {
                            minItems: 1,
                        });
                    </script>
                </div>
                <div class="w-full">
                    <label for="sizes"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sizes</label>
                    <div class="relative flex w-full">
                        <select id="sizes" name="sizes[]" multiple  placeholder="Select Collection..."
                            autocomplete="off" class="block w-full rounded-lg cursor-pointer focus:outline-none"
                            >
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
                <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2 md:col-start-1 md:col-end-3">
                    {{-- <div class="w-full mt-2">
                        <div class="flex justify-between items-center">
                            <label for="main_image_url"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Image</label>
                        </div>
                        <div class="mt-4">
                            <input type="file" id="main_image_url" name="main_image_url" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="choose image" />
                        </div>

                    </div>
                    <div class="w-full mt-2">
                        <div class="flex justify-between items-center">
                            <label for="images"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other
                                Images</label>
                        </div>
                        <div class="mt-4">
                            <input type="file" multiple id="images" name="images[]" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="choose image" />
                        </div>

                    </div> --}}

                    {{-- <div class="w-full md:col-start-1 md:col-end-3">
                        <label for="categories"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                        <div class="relative flex w-full">
                            <select id="categories" name="categories[]" multiple placeholder="Select Categories..."
                                autocomplete="off" class="block w-full rounded-sm cursor-pointer focus:outline-none"
                                multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach

                            </select>
                        </div>
                        <script>
                            new TomSelect('#categories', {
                                maxItems: 100,
                            });
                        </script>
                    </div> --}}
                </div>

            </div>

            <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2">
                <div>
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Price</label>

                    <input type="number" id="price" value="" name="price" step=".01"
                        class="bg-gray-50 h-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required />
                </div>
                <div>
                    <label for="offer_price"
                        class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Offer Price</label>

                    <input type="number" id="offer_price" value="" name="offer_price" step=".01"
                        class="bg-gray-50 h-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" />
                </div>
                <div>
                    <label for="stock_quantity"
                        class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Quantity</label>

                    <input type="number" id="stock_quantity" value="" name="stock_quantity"
                        class="bg-gray-50 h-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" />
                </div>
                <div class="">
                    <label for="minimum_quantity"
                        class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Minimum Quantity</label>

                    <input type="number" id="minimum_quantity" value="1" name="minimum_quantity"
                        class="bg-gray-50 h-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" />
                </div>
                <div class="">
                    <label for="maximum_quantity"
                        class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">Maximum Quantity</label>

                    <input type="number" id="maximum_quantity" value="5" name="maximum_quantity"
                        class="bg-gray-50 h-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2">
                <div class="">
                    <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description English</label>
                    <section>
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                <div
                                    class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">

                                    </div>
                                    <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">

                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="description_en" class="sr-only">Publish post</label>
                                <textarea id="description_en" rows="8" name="description_en"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    placeholder="Write an article..."></textarea>
                                <script>
                                    CKEDITOR.replace('description_en');
                                </script>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="">
                    <label for="description_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description Arabic</label>
                    <section>
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                <div
                                    class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">

                                    </div>
                                    <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">

                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="description_ar" class="sr-only">Publish post</label>
                                <textarea id="description_ar" rows="8" name="description_ar"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    placeholder="اكتب نص..."></textarea>
                            </div>
                        </div>
                    </section>
                    <script>
                        CKEDITOR.replace('description_ar');
                    </script>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
   
        </div>

        </form>
</x-app-layout>
