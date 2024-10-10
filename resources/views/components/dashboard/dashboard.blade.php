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
                    <svg width="24" height="24" viewBox="0 0 24 25" class="w-6 h-6 text-gray-500 d:text-white"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.9992 8.7743C9.88118 8.7743 8.16419 10.4913 8.16419 12.6093C8.16419 14.7273 9.88118 16.4443 11.9992 16.4443C14.1172 16.4443 15.8342 14.7273 15.8342 12.6093C15.8342 10.4913 14.1172 8.7743 11.9992 8.7743ZM9.66419 12.6093C9.66419 11.3197 10.7096 10.2743 11.9992 10.2743C13.2888 10.2743 14.3342 11.3197 14.3342 12.6093C14.3342 13.8989 13.2888 14.9443 11.9992 14.9443C10.7096 14.9443 9.66419 13.8989 9.66419 12.6093Z"
                            fill="#343C54" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.5809 8.9224C1.96404 9.99083 2.33012 11.357 3.39854 11.9739C3.88777 12.2563 3.88776 12.9625 3.39856 13.2449C2.33013 13.8618 1.96407 15.2279 2.58092 16.2964L4.09692 18.9222C4.71391 19.9908 6.08044 20.3568 7.14896 19.7399C7.63844 19.4573 8.25011 19.8106 8.25011 20.3754C8.25011 21.6092 9.2503 22.6094 10.4841 22.6094H13.5165C14.7502 22.6094 15.7501 21.6091 15.7501 20.3756C15.7501 19.8108 16.3615 19.458 16.8503 19.7402C17.9185 20.357 19.2845 19.991 19.9012 18.9227L21.4176 16.2963C22.0344 15.2279 21.6684 13.8617 20.6 13.2449C20.1108 12.9624 20.1108 12.2563 20.6 11.9739C21.6684 11.3571 22.0345 9.99089 21.4176 8.92247L19.9012 6.29604C19.2845 5.2278 17.9185 4.86179 16.8503 5.47854C16.3615 5.76076 15.7501 5.40794 15.7501 4.84314C15.7501 3.60961 14.7502 2.60938 13.5165 2.60938H10.4841C9.2503 2.60938 8.25011 3.60957 8.25011 4.84337C8.25011 5.40822 7.63842 5.76152 7.14894 5.47892C6.08042 4.86201 4.71388 5.22797 4.09689 6.29663L2.5809 8.9224ZM4.14854 10.6748C3.79755 10.4722 3.6773 10.0234 3.87994 9.6724L5.39593 7.04663C5.59863 6.69554 6.04772 6.57518 6.39894 6.77796C7.88811 7.63773 9.75011 6.56327 9.75011 4.84337C9.75011 4.43799 10.0787 4.10937 10.4841 4.10937L13.5165 4.10937C13.9216 4.10937 14.2501 4.43788 14.2501 4.84314C14.2501 6.56227 16.1112 7.63733 17.6003 6.77758C17.9511 6.57504 18.3997 6.69524 18.6022 7.04604L20.1186 9.67247C20.3212 10.0234 20.201 10.4722 19.85 10.6749C18.3608 11.5346 18.3608 13.6841 19.85 14.5439C20.2009 14.7465 20.3212 15.1953 20.1186 15.5463L18.6022 18.1727C18.3996 18.5235 17.9511 18.6437 17.6003 18.4412C16.1112 17.5815 14.2501 18.6565 14.2501 20.3756C14.2501 20.7809 13.9216 21.1094 13.5165 21.1094H10.4841C10.0787 21.1094 9.75011 20.7808 9.75011 20.3754C9.75011 18.6555 7.88812 17.5811 6.39896 18.4408C6.04774 18.6436 5.59866 18.5232 5.39596 18.1722L3.87996 15.5464C3.67732 15.1954 3.79757 14.7466 4.14856 14.5439C5.63778 13.6841 5.63775 11.5346 4.14854 10.6748Z"
                            fill="#343C54" />
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
                    <svg width="24" height="24" viewBox="0 0 25 24" class="text-gray-500" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0234 7.625C9.60719 7.625 7.64844 9.58375 7.64844 12C7.64844 14.4162 9.60719 16.375 12.0234 16.375C14.4397 16.375 16.3984 14.4162 16.3984 12C16.3984 9.58375 14.4397 7.625 12.0234 7.625ZM9.14844 12C9.14844 10.4122 10.4356 9.125 12.0234 9.125C13.6113 9.125 14.8984 10.4122 14.8984 12C14.8984 13.5878 13.6113 14.875 12.0234 14.875C10.4356 14.875 9.14844 13.5878 9.14844 12Z" fill="#343C54"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0234 4.5C7.71145 4.5 3.99772 7.05632 2.30101 10.7351C1.93091 11.5375 1.93091 12.4627 2.30101 13.2652C3.99772 16.9439 7.71145 19.5002 12.0234 19.5002C16.3353 19.5002 20.049 16.9439 21.7458 13.2652C22.1159 12.4627 22.1159 11.5375 21.7458 10.7351C20.049 7.05633 16.3353 4.5 12.0234 4.5ZM3.66311 11.3633C5.12472 8.19429 8.32017 6 12.0234 6C15.7266 6 18.922 8.19429 20.3836 11.3633C20.5699 11.7671 20.5699 12.2331 20.3836 12.6369C18.922 15.8059 15.7266 18.0002 12.0234 18.0002C8.32017 18.0002 5.12472 15.8059 3.66311 12.6369C3.47688 12.2331 3.47688 11.7671 3.66311 11.3633Z" fill="#343C54"/>
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
                    <svg width="24" height="24" viewBox="0 0 25 25" class="w-6 h-6 text-gray-500 d:text-white" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2755 2.28563C14.5558 2.16954 14.8783 2.23371 15.0928 2.44821L22.0929 9.44821C22.2335 9.58886 22.3125 9.77963 22.3125 9.97854C22.3125 10.1775 22.2335 10.3682 22.0929 10.5089L15.0928 17.5089C14.8783 17.7234 14.5558 17.7875 14.2755 17.6715C13.9952 17.5554 13.8125 17.2819 13.8125 16.9785V13.1805C8.99081 13.5129 5.04239 17.0253 4.05219 21.636C3.97796 21.9817 3.67244 22.2285 3.31891 22.2285C2.96538 22.2285 2.65986 21.9817 2.58563 21.636C2.4066 20.8024 2.3125 19.9379 2.3125 19.0523C2.3125 12.5386 7.39629 7.21238 13.8125 6.82486V2.97854C13.8125 2.67519 13.9952 2.40171 14.2755 2.28563ZM15.3125 4.7892V7.55227C15.3125 7.96649 14.9767 8.30227 14.5625 8.30227C9.00767 8.30227 4.43687 12.5155 3.87136 17.9206C5.96857 14.1816 9.96993 11.6548 14.5625 11.6548C14.9767 11.6548 15.3125 11.9906 15.3125 12.4048V15.1679L20.5019 9.97854L15.3125 4.7892Z" fill="#343C54"/>
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
