@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto text-start px-4">

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-20 items-center border-2 rounded-lg">
            <div class="">
                <img class="" src="{{ URL::to('img/about.jpeg') }}" alt="">
            </div>
            <div class="p-4">
                <h2 class="text-xl  text-gray-900 sm:text-2xl text-center">About House of Dresses</h2>
                <p>Welcome to House of Dresses, an exclusive fashion boutique founded by two Emirati sisters driven by a
                    shared passion for empowering women through timeless style. We specialize in creating custom-made
                    dresses that embody femininity, romance, and elegance, with each design crafted to celebrate the unique
                    beauty and individuality of every woman. At House of Dresses, we are dedicated to making every piece a
                    reflection of your personal style, ensuring that each moment feels extraordinary. In addition to
                    dresses, we proudly create traditional wear, including abayas, kaftans, and mukhaweer—iconic garments
                    deeply rooted in the rich cultural heritage of the Gulf region, including the UAE.
                    <br> Join us on this journey to redefine elegance and inspire confidence, one stunning dress at a time.
                </p>

            </div>
        </div>

        <div class="text-center pt-10 text-2xl font-semibold">"Crafted for the Elegant, Designed to Inspire this is a slogan
            for the House of Dresses"</div>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 items-start">
            <div class="p-4 text-center">
                <p class="font-semibold">Our Mission</p>
                <p>At House of Dresses, our mission is to craft timeless, elegant designs that celebrate femininity and
                    individuality. We strive to empower women by creating custom-made pieces that inspire confidence,
                    embrace beauty, and reflect personal style with grace and sophistication.</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">High Quality</p>
                <ul class="text-start">
                    <li>• If you make a payment for our products or services on our website, the details you are asked to
                        submit will be provided directly to our payment provider via a secured connection.</li>
                    <li>• The cardholder must retain a copy of transaction records and Merchant policies and rules.</li>
                    <li>• We accept payments online using Visa and MasterCard credit/debit card in AED (or any other agreed
                        currencies).</li>
                    <li>• Customers are requested to contact our support team if they want to request deletion of their
                        accounts (profiles) in our website. Once after verifying the identity, our team may proceed to
                        permanently delete the account. Caution: The deletion process cannot be undone once completed. No
                        data can be retrieved upon deletion.
                        At The House of Dresses, we are committed to excellence. Our fashion team meticulously selects each
                        fabric, ensuring that every piece is crafted with the finest materials to meet the highest standards
                        of qualityExceptional Customer Service
                        At The House of Dresses, we are committed to surpassing expectations at every step. We offer
                        personalized service, tailored solutions, and a seamless experience, ensuring that every client
                        feels valued and leaves with a lasting impression.

                    </li>
                </ul>
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
                <p>At House of Dresses, we are passionate about eco-conscious fashion. Our commitment to sustainability
                    begins with thoughtful production—each piece is custom-made to order, ensuring that we only use fabric
                    when needed, avoiding overproduction and waste. By focusing on quality over quantity, we create
                    beautiful, personalized dresses that not only celebrate individuality but also reduce environmental
                    impact.</p>
            </div>
            <div class="p-4 text-center">
                <p class="font-semibold">Inclusion</p>
                <p>At House of Dresses, we embrace diversity and celebrate the beauty of individuality. We welcome everyone,
                    regardless of gender, race, religion, or background, fostering a community where all voices are valued,
                    and together, we create a more vibrant and inclusive world.</p>
                {{-- <br>
                <p>We prioritize sustainable materials and ethical production practices, allowing us to craft designs that
                    care for both our customers and the planet. Join us in embracing responsible fashion and contributing to
                    a more sustainable future.</p> --}}
            </div>
        </div>
    </div>
@endsection
