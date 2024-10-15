<div class="py-10 max-w-screen-xl mx-auto">
    <div class="text-center md:text-4xl text-2xl basis-1/2  font-bold {{$textcolor}} drop-shadow-2xl py-10 dancing-script">
       @if(session('lang') == 'en') INSTA SHOP @else متجر إنستا @endif</div>
    <div class=" flex items-center justify-between space-x-2 overflow-x-auto">
        @foreach ($posts as $post)
            <livewire:post :url='$post->image_url' :post_url='$post->post_url' lazy>
        @endforeach
    </div>

    <div class="py-10">
        <h3 class="text-center {{$textcolor}} font-bold text-2xl underline leading-loose underline-offset-8 drop-shadow-2xl">
            @if(session('lang') == 'en') HOUSE OF DRESSES @else بيت الفساتين @endif</h3>
        <p class="text-center md:text-3xl text-lg text-[#b69357] font-bold leading-relaxed">@if(session('lang') == 'en')A Dress to every Story! @else فستان لكل قصة! @endif <br>
            @if(session('lang') == 'en')UAE-based fashion boutique, We deliver to GCC countries! @else بوتيك أزياء مقره في الإمارات العربية المتحدة، نقوم بالتوصيل إلى دول مجلس التعاون الخليجي! @endif</p>
        <div class="flex justify-center items-center pt-4">
            <button class="text-white bg-[#b69357] px-3.5 py-2 rounded-xl leading-relaxed font-bold text-2xl">@if(session('lang') == 'en') Read
                more @else اقرأ المزيد @endif</button>
        </div>
    </div>

    <div class="text-center text-white leading-relaxed font-bold text-2xl">
        <p>@if(session('lang') == 'en')Follow us @else تابعنا @endif : houseofdresses.ae</p>
    </div>

    <div class="flex items-center justify-center space-x-4 mt-4">
        <a href=""><img src="{{ URL::to('media/tools/insta.png') }}" alt=""></a>
        <a href=""><img src="{{ URL::to('media/tools/facebook.png') }}" alt=""></a>
        <a href=""><img src="{{ URL::to('media/tools/tiktok.png') }}" alt=""></a>
        <a href=""><img src="{{ URL::to('media/tools/snap.png') }}" alt=""></a>
    </div>
</div>
