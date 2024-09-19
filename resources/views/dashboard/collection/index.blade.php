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
    <div class="text-2xl py-4 font-bold underline text-[#b69357] dark:text-white">Collections</div>
    <div class="relative m-4 md:flex justify-between items-center">
        <a href="{{ route('collection.create') }}"> <button type="button"
                class="focus:outline-none shadow-lg text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Create</button></a>

        <form action="{{ route('collection.index', 'search') }}" class="w-full max-w-md " method="GET">
            @csrf
            @method('GET')
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search" name="search"
                    value="@if (!empty($inputs['search'])) {{ $inputs['search'] }} @endif"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search by collection name ..." />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>



    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase text-nowrap bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name en
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name ar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="">Actions</span>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr class="bg-white border-b text-start dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-4 font-extrabold whitespace-nowrap text-black text-base">
                            <span class="border px-3.5 py-2  rounded-full">{{ $record->id }}</span>
                        </td>
                        <td class="px-6 py-4 font-extrabold whitespace-nowrap text-black text-base">
                            {{ $record->name_en }}
                        </td>
                        <td class="px-6 py-4 font-extrabold whitespace-nowrap text-black text-base">
                            {{ $record->name_ar }}
                        </td>

                        <td class="px-6 py-4 text-right flex justify-start items-center  space-x-4">
                            <a href="{{ route('collection.edit', $record->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('collection.destroy', $record->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class=" text-red-600 hover:text-red-700">Delete</button>
                            </form>
                        </td>


                    </tr>
                @endforeach


            </tbody>
        </table>
        <nav aria-label="Page navigation example" class="p-4">
            {{ $records->links() }}
        </nav>
    </div>
</x-app-layout>
