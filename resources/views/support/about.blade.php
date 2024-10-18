@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto text-start px-4">

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-20 items-center border-2 rounded-lg">
            <div class="">
                <img class="" src="{{ URL::to('img/about.jpeg') }}" alt="">
            </div>
            <div class="p-4">
                <h2 class="text-xl  text-gray-900 sm:text-2xl text-center">About House of Dresses</h2>
                <p>Welcome to The House of Dresses, a premier fashion boutique founded by two Emirati sisters passionate
                    about empowering women through style. Specializing in custom-made feminine, romantic, and elegant
                    dresses, we believe that every woman deserves to embrace her individuality and express her unique
                    beauty. At The House of Dresses, we craft exquisite pieces that celebrate your personal style, making
                    every occasion memorable. Join us on this journey to redefine elegance and inspire confidence, one
                    stunning dress at a time!</p>

            </div>
        </div>

        <div class="text-center pt-10 text-2xl font-semibold">"Crafted for the Elegant, Designed to Inspire this is a slogan
            for the House of Dresses"</div>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 items-start">
            <div class="p-4 text-center">
                <p class="font-semibold">Our Mission</p>
                <p>At The House of Dresses, our mission is to craft timeless, elegant designs that celebrate femininity and
                    individuality. We strive to empower women by creating custom-made pieces that inspire confidence,
                    embrace beauty, and reflect personal style with grace and sophistication</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">High Quality</p>
                <p>At The House of Dresses, we are committed to excellence. Our fashion team meticulously selects each
                    fabric, ensuring that every piece is crafted with the finest materials to meet the highest standards of
                    quality</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">Exceptional Customer Service</p>
                <p>At The House of Dresses, we are committed to surpassing expectations at every step. We offer personalized
                    service, tailored solutions, and a seamless experience, ensuring that every client feels valued and
                    leaves with a lasting impression.</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">Authenticity</p>
                <p>At The House of Dresses, we draw inspiration from the world around us, but we don’t simply follow
                    trends—we set them. Each design is thoughtfully crafted to reflect true originality and timeless
                    elegance.</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">Sustainability</p>
                <p>At The House of Dresses, we are passionate about eco-conscious fashion. We prioritize sustainable
                    materials and ethical production practices to create beautiful dresses that also care for the planet.
                    Join us in shopping responsibly and contributing to a sustainable future.</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">Inclusion</p>
                <p>At The House of Dresses, we embrace diversity and celebrate the beauty of individuality. We welcome
                    everyone, regardless of gender, race, religion, or background, fostering a community where all voices
                    are valued, and together, we create a more vibrant and inclusive world.</p>
            </div>
        </div>
    </div>
@endsection
