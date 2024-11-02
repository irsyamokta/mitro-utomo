<div class="flex justify-around items-center gap-2 mt-10 mx-4">
    <span class="flex justify-center items-center gap-2">
        <img src="{{ asset('assets/icon/icon-quality.png') }}" class="w-8 h-8 md:w-14 md:h-14">
        <p class="text-sm md:text-lg text-primary font-semibold">Kualitas Tinggi</p>
    </span>
    <span class="flex justify-center items-center gap-2">
        <img src="{{ asset('assets/icon/icon-coin.png') }}" class="w-8 md:w-14">
        <p class="text-sm md:text-lg text-primary font-semibold">Harga Terjangkau</p>
    </span>
    <span class="flex justify-center items-center gap-2">
        <img src="{{ asset('assets/icon/icon-admin.png') }}" class="w-8 md:w-14">
        <p class="text-sm md:text-lg text-primary font-semibold">Admin Responsif</p>
    </span>
</div>
<section id="product" class="flex flex-col lg:flex-row justify-center items-center h-[100vh] overflow-hidden gap-12 lg:px-12 relative">
    <div class="flex justify-center items-center">
        <img src="{{ asset('assets/img/img-product-bio-auth.png') }}" class="w-56 md:w-[400px] lg:w-[800px]"
            alt="">
    </div>
    <div class="px-6 w-full max-w-screen-xl py-16 text-center lg:text-left">
        <h1 class="text-2xl font-semibold tracking-wide text-accent md:text-5xl 2xl:text-6xl">Pupuk Organik ABG-BIO</h1>
        <p class="lg:text-justify text-xs md:text-base font-regular mt-5 lg:mt-10 lg:pr-12 text-gray-700">ABG-BIO adalah
            solusi unggulan untuk pertanian modern, menggabungkan konsorsium inokulan agen pelarut fosfat dan penambat
            nitrogen, serta pupuk hayati dengan agen biologis. Formula canggih ini tidak hanya meningkatkan ketersediaan nutrisi dan efisiensi pemupukan, tetapi juga melindungi tanaman dari patogen tanah. Diperkaya dengan senyawa bioaktif dan zat pengatur tumbuhan, ABG-BIO memberikan semua nutrisi penting yang diperlukan tanaman untuk tumbuh subur dan sehat. Transformasikan pertanian Anda dengan ABG-BIO dan rasakan perbedaan nyata dalam hasil panen Anda!</p>
            <a href="{{ route('register') }}">
                <button type="button" class="mt-10 text-white bg-accent hover:bg-yellow-500 font-medium rounded-lg text-sm px-6 py-2 text-center">Dapatkan</button>
            </a>
    </div>
</section>
