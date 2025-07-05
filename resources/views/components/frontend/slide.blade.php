
  <div class="max-w-[1270px]  swiper mySwiper w-full h-full px-4">
    <div class="swiper-wrapper">
      <!-- Slide Item -->
      <div class="swiper-slide bg-white rounded-xl flex items-center  border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f1.png') }}" alt="24/7 Support" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl  bg-emerald-100 ">
          <p class="text-gray-900 text-sm md:text-base mt-1">Envio Gratis</p>
        </div>
      </div>

      <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f2.png') }}" alt="Ethereum" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl bg-fuchsia-100">
         
          <p class="text-gray-900 text-sm md:text-base mt-1">Pedidos Online</p>
        </div>
      </div>

      <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f3.png') }}" alt="Solana" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl bg-lime-100">
          
          <p class="text-gray-900 text-sm md:text-base mt-1">Salva Dinheiro</p>
        </div>
      </div>

      <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f4.png') }}" alt="Dogecoin" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl bg-blue-100">
         
          <p class="text-gray-900 text-sm md:text-base mt-1">Promoções</p>
        </div>
      </div>

      <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f5.png') }}" alt="Bitcoin" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl bg-purple-100">
     
          <p class="text-gray-900 text-sm md:text-base mt-1">Ofertas</p>
        </div>
      </div>

      <div class="swiper-slide bg-white rounded-xl flex items-center border-2 border-gray-200 p-4 gap-4 h-32">
        <img src="{{ asset('assets/frontend/imagens/f6.png') }}" alt="Bitcoin" class="w-full h-full">
        <div class="text-center inline-block px-2 mx-auto w-auto rounded-xl bg-rose-50">
          
          <p class="text-gray-900 text-sm md:text-base mt-1">Suporte</p>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    
    <!-- Pagination -->
    <div class="swiper-pagination mt-4"></div>
  </div>
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

    breakpoints: {
      0: {
        slidesPerView: 2,
        slidesPerGroup: 1, // ✅ Move 1 slide at a time
      },
      640: {
        slidesPerView: 4,
        slidesPerGroup: 1, // ✅ Still move only 1
      },
      1024: {
        slidesPerView: 5,
        slidesPerGroup: 1, // ✅ Still move only 1
      },
    },
  });
</script>



