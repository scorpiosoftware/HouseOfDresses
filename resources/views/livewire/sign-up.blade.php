<div id="cr_form"
    class="fixed hidden md:top-1/2 top-80 left-1/2 -translate-x-1/2 md:w-[750px] w-full  px-4 py-6  -translate-y-1/2 -mt-1/2 -ml-1/2 z-50 bg-white">
    <div class="flex justify-end items-center">
        <button id="btn_signup" class="rounded-full px-3 text-xl font-bold">X</button>
    </div>
    <div class="container mx-auto  md:flex items-center space-x-5">
        <div class="md:basis-2/3 flex justify-center w-32  mx-auto ">
            <img class="" src="{{ URL::to('media/new/logo.png') }}" alt="">
        </div>

        <div class="md:px-20">
            <div class="text-center md:text-xl text-sm  text-black font-semibold">
                <p>Dont Miss Out On Your Favorites!</p>
                <p>Join our mailing list</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="pt-10">
                @csrf
                <div class="flex justify-center items-center space-x-1">
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 ">name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="John" required />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                            address</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="john.doe@company.com" required />
                    </div>
                </div>

                <div class="flex justify-center items-center space-x-1">
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="•••••••••" required />
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900">Confirm</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="•••••••••" required />
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <button type="submit"
                        class=" bg-white border-2 border-[#b69357] text-[#b69357] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2  text-center">Sign
                        Up</button>
                </div>
            </form>
            <div class="md:px-10 text-center text-sm">
                *By completing this form you're signing up to receive our emails and can unsubscribe at any time.
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#cr_form").slideDown(1000);
            }, 2000);

            $("#btn_signup").click(function(e) {
                $("#cr_form").fadeOut().hide(500);
            });
        });
    </script>

</div>
