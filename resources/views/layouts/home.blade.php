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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <link href="{{ URL::to('css/productSlider.css') }}" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    {{-- @vite('resources/css/app.css', 'resources/js/app.js') --}}
</head>

<body class="font-sans antialiased">
    <livewire:news-lable>
        <livewire:navbar>
        <livewire:cart-menu>
            <livewire:menu>
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
