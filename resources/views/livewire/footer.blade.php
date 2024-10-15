<div class="bg-white w-full h-full p-6">
    <div class="hidden md:flex justify-between items-start text-start space-x-4  overflow-auto">
        <div class="text-[#b69357] font-bold">
            <h2 class="underline text-xl font-semibold">COLLECTIONS</h2>
            <ul>
                @foreach ($collections as $collection)
                    <li>{{ $collection->name_en }}</li>
                @endforeach
            </ul>
        </div>
        <div class="text-[#b69357] font-bold">
            <h2 class="underline text-xl font-semibold">INFORMATION</h2>
            <ul>
                <li>Careers</li>
                <li>About us</li>
                <li>Terms of Service</li>
                <li>Privacy Policy</li>
                <li>Do not sell my personal</li>
                <li>information</li>
            </ul>
        </div>
        <div class="text-[#b69357] font-bold">
            <h2 class="underline text-xl font-semibold">CUSTOMER CARE</h2>
            <ul>
                <li>Contact Us</li>
                <li>Shipping + Delivery</li>
                <li>Returns & Exchanges</li>
                <li>Sizing</li>
                <li>Gift Cards</li>
            </ul>
        </div>
        <div class="text-[#b69357] font-bold">
            <h2 class="underline text-xl font-semibold">FOLLOW US</h2>
            <ul>
                <li><a href="https://www.instagram.com/houseofdresses.ae?igsh=NnN4YmZjbndiNm0y&utm_source=qr">Instagram</a></li>
                <li><a href="https://www.facebook.com/houseofdresses.ae?mibextid=LQQJ4d">Facebook</a></li>
                <li><a href="https://www.tiktok.com/@houseofdresses?_t=8puq8suZwAB&_r=1">Tiktok</a></li>
                <li><a href="">Snapchat</a></li>
            </ul>
        </div>
        <div class="text-[#b69357] font-bold">
            <h2 class="underline text-xl font-semibold">QUICK LINK</h2>
            <ul>
                <li>FAQ's</li>
                <li>Are you a Fashion</li>
                <li>Blogger?</li>
                <li>Make A Return or Exchange</li>
            </ul>
        </div>
    </div>
    <div id="accordion-color" data-accordion="collapse" class="md:hidden" data-active-classes="bg-white text-[#b69357]">
        {{-- element 1 --}}
        <h2 id="accordion-color-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-2 font-bold rtl:text-right text-[#b69357] border-1  rounded-t-xl gap-3"
                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                aria-controls="accordion-color-body-1">
                <span>COLLECTIONS</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div
                class="px-10 border border-b-0 border-gray-200 text-[#b69357] font-bold leading-7 rtl:text-end text-start">
                <ul class="list-decimal">
                    <li>You are a Gem</li>
                    <li>Summer 2024</li>
                    <li>Ramadan / Eid 2024</li>
                    <li>Love Yourself volume II</li>
                    <li>Fall / Winter 2023</li>
                    <li>Summer 2023</li>
                    <li>Love Yourself volume I</li>
                    <li>Velvet</li>
                    <li>Shimmer</li>
                    <li>Pleated Glass</li>
                    <li>Femininity and Elegance</li>
                </ul>
            </div>
        </div>

        {{-- element 2 --}}
        <h2 id="accordion-color-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-2 font-bold rtl:text-right text-[#b69357] border-1 gap-3"
                data-accordion-target="#accordion-color-body-2" aria-expanded="true"
                aria-controls="accordion-color-body-2">
                <span>INFORMATION</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
            <div
                class="px-10 border border-b-0 border-gray-200 text-[#b69357] font-bold leading-7 rtl:text-end text-start">
                <ul class="list-decimal">
                    <li>Careers</li>
                    <li>About us</li>
                    <li>Terms of Service</li>
                    <li>Privacy Policy</li>
                    <li>Do not sell my personal</li>
                    <li>information</li>
                </ul>
            </div>
        </div>

        {{-- element 3 --}}
        <h2 id="accordion-color-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-2 font-bold rtl:text-right text-[#b69357] border-1 gap-3"
                data-accordion-target="#accordion-color-body-3" aria-expanded="true"
                aria-controls="accordion-color-body-3">
                <span>CUSTOMER CARE</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div
                class="p-5 border border-b-0 border-gray-200 text-[#b69357] font-bold leading-7 rtl:text-end text-start">
                <ul class="list-decimal">
                    <li>Contact Us</li>
                    <li>Shipping + Delivery</li>
                    <li>Returns & Exchanges</li>
                    <li>Sizing</li>
                    <li>Gift Cards</li>
                </ul>
            </div>
        </div>

        {{-- element 4 --}}
        <h2 id="accordion-color-heading-4">
            <button type="button"
                class="flex items-center justify-between w-full p-2 font-bold rtl:text-right text-[#b69357] border-1 gap-3"
                data-accordion-target="#accordion-color-body-4" aria-expanded="true"
                aria-controls="accordion-color-body-4">
                <span>FOLLOW US</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
            <div
                class="p-5 border border-b-0 border-gray-200 text-[#b69357] font-bold leading-7 rtl:text-end text-start">
                <ul class="list-decimal">
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Tiktok</li>
                    <li>Snapchat</li>
                </ul>
            </div>
        </div>

        {{-- element 5 --}}
        <h2 id="accordion-color-heading-5">
            <button type="button"
                class="flex items-center justify-between w-full p-2 font-bold rtl:text-right text-[#b69357] border-1 gap-3"
                data-accordion-target="#accordion-color-body-5" aria-expanded="true"
                aria-controls="accordion-color-body-5">
                <span>QUICK LINK</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
            <div
                class="p-5 border border-b-0 border-gray-200 text-[#b69357] font-bold leading-7 rtl:text-end text-start">
                <ul class="list-decimal">
                    <li>FAQ's</li>
                    <li>Are you a Fashion</li>
                    <li>Blogger?</li>
                    <li>Make A Return or Exchange</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="md:flex justify-center items-start space-x-2 pt-12 overflow-auto">
        <div class="flex justify-start space-x-3">
            <img class="w-60" src="{{ URL::to('media/new/logo.png') }}" alt="">
            <div class="px-[1px] h-44 bg-[#b69357]"></div>
        </div>

        <div class="flex justify-start items-start space-x-3 text-[#b69357] font-semibold ">
            <div class="px-10 py-4">
                <div>
                    <h1>Contact Customer Care:</h1>
                    <div class="font-bold">+971 54 364 9606</div>
                </div>
                <div>
                    <h1>Email:</h1>
                    <div class="font-bold">house_of_dresses@outlook.com</div>
                </div>
            </div>
            <div class="px-[1px] h-44 bg-[#b69357]"></div>
        </div>

        <div class="flex justify-start items-start space-x-3 text-[#b69357] font-semibold ">
            <div class="px-10 py-10">
                <div>
                    <h1>&copy;2024 HOUSE OF DRESSES </h1>
                    <div class="font-bold">All Rights Reserved</div>
                </div>

            </div>
            <div class="px-[1px] h-44 bg-[#b69357]"></div>
        </div>

        <div class="flex justify-start items-start space-x-3 text-[#b69357] font-semibold ">
            <div class="px-10 py-10">
                <div class="flex justify-center items-center space-x-3">
                    <img src="{{ URL::to('media/new/visa.jpg') }}" class="w-20" alt="">
                    <img src="{{ URL::to('media/new/mastercard.jpg') }}" class="w-20" alt="">
                    <img src="{{ URL::to('media/new/pay.jpg') }}" class="w-20" alt="">
                </div>
                <div class="flex justify-center items-center pt-4">
                    <img src="{{ URL::to('media/new/tabby.jpg') }}" class="w-20" alt="">
                </div>
            </div>
            <div class="px-[1px] h-44 bg-[#b69357]"></div>
        </div>
    </div>
</div>
