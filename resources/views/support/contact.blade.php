@extends('layouts.home')
@section('content')
    <div class="max-w-6xl mx-auto text-start px-4">

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-20 items-center border-2 rounded-lg">
            <div class="">
                <img class="" src="{{ URL::to('img/about.jpeg') }}" alt="">
            </div>
            <div class="p-4">
                <h2 class="text-xl  text-gray-900 sm:text-2xl text-center">Customer Care</h2>
                {{-- <div>We are open on all days - 9am to 6pm Gulf Standard Time</div> --}}
                <div class="pt-4 w-80">
                    <h1>Opening Schedule:</h1>
                    <div class="flex justify-between items-center">
                        <p>Monday to Thursday:</p>
                        <p>10 AM - 9 PM</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p>Friday:</p>
                        <p>Closed</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p>Saturday & Sunday:</p>
                        <p>10 AM - 9 PM</p>
                    </div>
                </div>
                <br>
                <div class="flex justify-start space-x-4 items-start">
                    <img class="w-12"
                        src="https://chiclefrique.com/cdn/shop/t/117/assets/mail.png?v=34107127278551497921710222377"
                        alt="">
                    <div>
                        Email :
                        <br>
                        <a class="text-[#b69357]" href="mailto: info@houseofdresses.fashion">info@houseofdresses.fashion</a>
                        <br>
                        <span>We will reply to you in 12-24 hours.</span>
                    </div>
                </div>
                <br>
                <hr>
                <div class="flex justify-start space-x-4 items-start">
                    <img class="w-12"
                        src="https://chiclefrique.com/cdn/shop/t/117/assets/telephone.png?v=21009935013959724091710222383"
                        alt="">
                    <div>
                        Phone :
                        <br>
                        <span>+971 54 364 9606</span>
                    </div>
                </div>

                <br>
                <hr>
            </div>
        </div>
    </div>




    <section class="bg-white d:bg-gray-900 max-w-2xl mx-auto">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 d:text-white">Contact Us
            </h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 d:text-gray-400 sm:text-xl">Got a technical
                issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="{{ route('send-comment') }}" class="space-y-8" method="POST">
                @csrf
                @method('POST')
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 d:text-gray-300">Your
                        Full Name</label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-primary-500 d:focus:border-primary-500 d:shadow-sm-light"
                        placeholder="Your Name" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 d:text-gray-300">Your
                        email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-primary-500 d:focus:border-primary-500 d:shadow-sm-light"
                        placeholder="name@****.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 d:text-gray-300">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-primary-500 d:focus:border-primary-500 d:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 d:text-gray-400">Your
                        message</label>
                    <textarea id="comment" rows="6" name="comment"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 d:bg-gray-700 d:border-gray-600 d:placeholder-gray-400 d:text-white d:focus:ring-primary-500 d:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <div class="mt-2 flex justify-end">
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-[#b69357] sm:w-fit hover:bg-[#b69357] focus:ring-4 focus:outline-none focus:ring-primary-300">Send
                        message</button>
                </div>

            </form>
        </div>
    </section>
@endsection
