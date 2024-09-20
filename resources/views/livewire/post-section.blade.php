<div class="py-10 max-w-screen-xl mx-auto">
    <div class="text-center md:text-4xl text-2xl basis-1/2 text-white font-bold drop-shadow-2xl py-10 dancing-script">INSTA SHOP</div>
    <div class=" flex items-center justify-between space-x-2 overflow-x-auto">
        @foreach ($posts as $post)
        <livewire:post :url='$post->image_url' :post_url='$post->post_url' lazy>
        @endforeach
    </div>

    <div class="py-10">
        <h3 class="text-center text-white font-bold text-2xl underline leading-loose underline-offset-8 drop-shadow-2xl">HOUSE OF DRESSES</h3>
        <p class="text-center md:text-3xl text-lg text-[#b69357] font-bold leading-relaxed">A Dress to every Story! <br> UAE-based fashion boutique, We deliver to GCC countries!</p>
        <div class="flex justify-center items-center pt-4">
            <button class="text-white bg-[#b69357] px-3.5 py-2 rounded-xl leading-relaxed font-bold text-2xl">Read more</button>
        </div>
    </div>

    <div class="text-center text-white leading-relaxed font-bold text-2xl">
            <p>Follow us: houseofdresses.ae</p>
    </div>
</div>
