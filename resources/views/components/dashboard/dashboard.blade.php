<nav class="fixed top-0 z-50 w-full bg-slate-100 border-b border-gray-200 d:bg-gray-800 d:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 d:text-gray-400 d:hover:bg-gray-700 d:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex ms-2 md:me-24">
                    <img src="/media/new/logo.png" class="h-10 me-3" alt="Logo" />
                    {{-- <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap d:text-white">Flowbite</span> --}}
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 d:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow d:bg-gray-700 d:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 d:text-white" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate d:text-gray-300" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('dashboard.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 d:text-gray-300 d:hover:bg-gray-600 d:hover:text-white"
                                    role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit', Auth::user()->id) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 d:text-gray-300 d:hover:bg-gray-600 d:hover:text-white"
                                    role="menuitem">Settings</a>
                            </li>
                            <li class="">
                                <form action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                    @method('POST')
                                    <button
                                        class="block px-4 py-2 text-sm w-full text-start text-gray-700 hover:bg-gray-100 d:text-gray-300 d:hover:bg-gray-600 d:hover:text-white"
                                        role="menuitem">Sign out</button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 d:bg-gray-800 d:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white d:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('dashboard.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 d:text-gray-400 group-hover:text-gray-900 d:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('general.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500 d:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>

                    <span class="ms-3">General Info</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('carousel.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500 d:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>

                    <span class="ms-3">Carousel</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('users.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20">
                        <path
                            d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z">
                        </path>
                    </svg>

                    <span class="ms-3">Users</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('productView.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20">
                        <path
                            d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z">
                        </path>
                    </svg>

                    <span class="ms-3">Product View</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('inbox.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    {{-- <svg class="w-6 h-6 text-gray-800 d:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                      </svg> --}}
                    <svg class="w-6 h-6 text-gray-500 d:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ms-3">Inbox</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <a href="{{ route('post.index') }}"
                    class="flex items-center p-2 text-[#b69357] font-bold rounded-lg d:text-white hover:bg-gray-100 d:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500 d:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ms-3">Posts</span>
                </a>
            </li>
            <li class="border-2 rounded-xl border-[#b69357]">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-[#b69357] font-bold transition duration-75 rounded-lg group hover:bg-gray-100 d:text-white d:hover:bg-gray-700"
                    aria-controls="dropdown-ecommerce" data-collapse-toggle="dropdown-ecommerce">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 d:text-gray-400 d:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">C R M</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-ecommerce" @if (Route::currentRouteName() == 'product.index' ||
                        Route::currentRouteName() == 'product.create' ||
                        Route::currentRouteName() == 'product.edit') data-accordion = "open" @endif
                    class="hidden py-2 px-4 space-y-2">
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('brand.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Brands</a>
                    </li>
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('category.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Categories</a>
                    </li>
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('collection.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Collections</a>
                    </li>
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('size.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Sizes</a>
                    </li>
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('product.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Products</a>
                    </li>
                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('color.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Colors</a>
                    </li>

                    <li class="border-2 rounded-xl border-[#b69357]">
                        <a href="{{ route('order.index') }}"
                            class="flex items-center w-full p-2 text-[#b69357] font-bold transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 d:text-white d:hover:bg-gray-700">Orders</a>
                    </li>
                </ul>
            </li>
    </div>
</aside>
