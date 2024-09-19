<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ URL::to('media/logo/jamesia.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <link href="{{ URL::to('css/productSlider.css') }}" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="font-sans antialiased">
    <livewire:news-lable>
        <livewire:navbar>
        <livewire:cart-menu>
            <livewire:menu>
        {{-- <div class=" pt-10 md:px-20 px-2 z-40 w-full bg-transparent">
            <div class=" flex justify-between items-center">
                <div id="menu_btn" class="text-[#b69357] font-bold flex justify-center items-center space-x-4 cursor-pointer">
                    <svg class="icon--icon-theme-menu-bars slideout__trigger-mobile-menu--icon vib-center" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.7 20" height="20px" xml:space="preserve">
                        <g class="hover-fill" fill="#b69357">
                         <path d="M0,10c0-0.6,0.5-1.1,1.1-1.1h24.4c0.6,0,1.1,0.5,1.1,1.1s-0.5,1.1-1.1,1.1H1.1C0.5,11.1,0,10.6,0,10z"></path>
                         <path d="M0,18.9c0-0.6,0.5-1.1,1.1-1.1h24.4c0.6,0,1.1,0.5,1.1,1.1S26.2,20,25.6,20H1.1C0.5,20,0,19.5,0,18.9z"></path>
                         <path d="M0,1.1C0,0.5,0.5,0,1.1,0h24.4c0.6,0,1.1,0.5,1.1,1.1s-0.5,1.1-1.1,1.1H1.1C0.5,2.2,0,1.7,0,1.1z"></path>
                       </g>
                     </svg>
                    <span class="md:text-lg text-xs">Menu</span>
                </div>
        
                <div>
                   <a href="/"><img class="md:w-44 w-24" src="{{ URL::to('media/new/logo.png') }}" alt=""></a> 
                </div>
                <div>
                      <img class="cursor-pointer md:w-8 w-6" src="{{ URL::to('media/tools/home.png') }}"  alt="">
                </div>
        
            </div>
        </div> --}}
        

        <main>
            <div class="md:mt-64 mt-44"></div>
            @yield('content')

            <br>
            <br>
        </main>
        <livewire:footer>
            <x-section.scripts />
</body>

</html>
