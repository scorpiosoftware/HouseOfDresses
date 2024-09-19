<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ URL::to('media/logo/jamesia.png') }}">
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <link href="{{ URL::to('css/productSlider.css') }}" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playwrite+CU:wght@100..400&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="antialiased bg-[#e4c7cb]" id="home">
    <style>
        .dancing-script {
            font-family: "Playwrite CU", cursive;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    <div class="">
        @guest
            <livewire:sign-up>
            @endguest
            <livewire:cart-menu>
                <livewire:menu>
                    <livewire:news-lable>
                        <livewire:navbar>
                            <livewire:carousel url='carousel-2.jpg' title='UNIQUE DRESSES'
                                position='top-[40%] right-1/3 z-40 translate-x-1/2 translate-y-1/2'>
                                <livewire:category-scroll>
                                    <livewire:carousel url='carousel-1.jpg' title='LUXURY AHAYAS'
                                        position='top-[40%] left-20 z-40 translate-y-1/2'>
                                        <livewire:categorywithimage>
                                            <livewire:product-slider>
                                                <livewire:post-section :posts='$posts'>
                                                    <livewire:footer>
                                                        <x-home.speed-dial />
                                                    <livewire:top>
    </div>
    </div>
    <x-section.scripts />
</body>

</html>
