<x-app-layout>
    @if (session()->has('success'))
        <div id="alert-border-3"
            class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 d:text-green-400 d:bg-gray-800 d:border-green-800"
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

    <div class="text-2xl py-4 font-bold underline text-gray-900 d:text-white">Edit General</div>
    <!-- Breadcrumb -->
    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 d:bg-gray-800 d:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('general.index') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 d:text-gray-400 d:hover:text-white">
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
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 d:text-gray-400">Edit</span>
                </div>
            </li>
        </ol>
    </nav>
    {{-- End Breadcrumb  --}}


    <form class="pt-4" action="{{ route('general.update', $record->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2">
                <div>
                    <label for="news_title" class="block mb-2 text-sm font-medium text-gray-900 d:text-white">News Title</label>
                    <input type="text" id="news_title" value="{{ $record->news_title }}" name="news_title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-blue-500 d:focus:border-blue-500"
                        placeholder="news title" />
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 border-2 p-4 md:grid-cols-2">
                <div class="">
                    <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 d:text-white">
                         Shipping & Delivery Info</label>
                    <section>
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 d:bg-gray-700 d:border-gray-600">
                            <div class="flex items-center justify-between px-3 py-2 border-b d:border-gray-600">
                                <div
                                    class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse d:divide-gray-600">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">

                                    </div>
                                    <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">

                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg d:bg-gray-800">
                                <label for="shipping" class="sr-only">Publish post</label>
                                <textarea id="shipping" rows="8" name="shipping"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 d:bg-gray-800 focus:ring-0 d:text-white d:placeholder-gray-400"
                                    placeholder="Write an article...">{{ $record->shipping }}</textarea>
                                <script>
                                    CKEDITOR.replace('shipping');
                                </script>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="">
                    <label for="exchange" class="block mb-2 text-sm font-medium text-gray-900 d:text-white">
                         Returns & Exchanges Info</label>
                    <section>
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 d:bg-gray-700 d:border-gray-600">
                            <div class="flex items-center justify-between px-3 py-2 border-b d:border-gray-600">
                                <div
                                    class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse d:divide-gray-600">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">

                                    </div>
                                    <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">

                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg d:bg-gray-800">
                                <label for="exchange" class="sr-only">Publish post</label>
                                <textarea id="exchange" rows="8" name="exchange"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 d:bg-gray-800 focus:ring-0 d:text-white d:placeholder-gray-400"
                                    placeholder="">{{ $record->exchange }}</textarea>
                            </div>
                        </div>
                    </section>
                    <script>
                        CKEDITOR.replace('exchange');
                    </script>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center d:bg-blue-600 d:hover:bg-blue-700 d:focus:ring-blue-800">Submit</button>
        </div>

    </form>
</x-app-layout>