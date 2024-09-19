<div>
    <div id="top"
    class="fixed bottom-10 left-10 z-50 text-xl font-bold text-[#b69357] rounded-full  cursor-pointer transition-all delay-0 hover:scale-110">
    <div class="flex justify-center text-3xl translate-y-3">^
    </div>
    <div>TOP</div>
</div>
<script>
    $("#top").click(function() {
        $('html,body').animate({
                scrollTop: $("#home").offset().top
            },
            'slow');
    });
</script>
</div>
