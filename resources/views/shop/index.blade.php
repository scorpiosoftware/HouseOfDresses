@extends('layouts.home')
@section('content')
    <div class="mt-14 text-center">
        <h1 class="underline-offset-8 underline text-[#b69357] md:text-2xl text-xl">
            {{-- @if (!empty($inputs['collection']))
             
              @else
              ALL - COLLECTION
            @endif  --}}
            @if(!empty($collection))
                {{ $collection->name_en }} - COLLECTION

                @elseif (!empty($category))
                  {{ $category->name_en }} - CATEGORY
            @endif
          
        </h1>
        <nav class="flex justify-center mt-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-[#b69357] hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        House of Dresses
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-[#b69357] mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-[#b69357] md:ms-2 dark:text-gray-400">
                            @if(!empty($collection))
                            {{ $collection->name_en }} - COLLECTION
            
                            @elseif (!empty($category))
                              {{ $category->name_en }} - CATEGORY
                            @endif
                        </span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div class="flex justify-end md:max-w-[80rem] space-x-1 mt-10">
        <button id="filter_btn" class="rounded-xl border border-[#b69357] px-6 py-1 text-xl text-[#b69357] font-semibold">Filter</button>
        <button class="rounded-xl border border-[#b69357] px-6 py-1 text-xl text-[#b69357] font-semibold">Sort by</button>
    </div>
    <livewire:product-show :products='$products'>
        <script>
            $(document).ready(function(){
                $("#filter").hide();
                $('#filter_btn').click(function(){
                    $("#filter").toggle();
                })
    
            });
        </script>
@endsection
