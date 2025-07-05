
<div class="max-w-[1270px] swiper mySwiper w-full h-full px-4 relative">
  <div class="swiper-wrapper">
    <!-- Slide 1 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f1.png') }}" alt="24/7 Support" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 inline-block px-6 mx-auto w-auto rounded-xl text-sm md:text-base bg-emerald-100">Envio Gratis</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f2.png') }}" alt="Ethereum" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 text-sm md:text-base inline-block px-6 mx-auto w-auto rounded-xl bg-fuchsia-100">Pedidos Online</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f3.png') }}" alt="Solana" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 text-sm md:text-base inline-block px-6 mx-auto w-auto rounded-xl bg-amber-100">Salva Dinheiro</p>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f4.png') }}" alt="Dogecoin" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 inline-block px-6 mx-auto w-auto rounded-xl text-sm md:text-base bg-blue-100">Promoções</p>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f5.png') }}" alt="Bitcoin" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 inline-block px-6 mx-auto w-auto rounded-xl text-sm md:text-base bg-purple-100">Ofertas</p>
      </div>
    </div>

    <!-- Slide 6 -->
    <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32 relative">
      <a href="javascript:void(0)" class="absolute inset-0 bg-transparent"></a>
      <img src="{{ asset('assets/frontend/imagens/f6.png') }}" alt="Bitcoin" class="w-full h-full">
      <div class="flex items-center justify-center mt-1">
        <p class="text-gray-900 inline-block px-6 mx-auto w-auto rounded-xl text-sm md:text-base bg-rose-50">Suporte</p>
      </div>
    </div>
  </div>

  <!-- Navigation Arrows -->
<div class="swiper-button-prev !text-gray-700 !w-3 !h-4"></div>
<div class="swiper-button-next !text-gray-700 !w-3 !h-3"></div>

  <!-- Pagination (optional) -->
  <div class="swiper-pagination mt-4"></div>
</div>

<!-- Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        slidesPerGroup: 1,
      },
      640: {
        slidesPerView: 4,
        slidesPerGroup: 1,
      },
      1024: {
        slidesPerView: 5,
        slidesPerGroup: 1,
      },
    },
  });
</script>




