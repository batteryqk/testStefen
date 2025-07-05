<x-frontend::layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="page_slug">home</x-slot>




<section class="relative ">
    <img src="{{ asset('assets/frontend/imagens/foto.jpg') }}" alt="About Us Background" class="w-full h-[655px] object-cover">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute left-1/2 top-[65%] md:left-20 md:top-1/2 transform -translate-x-1/2 md:-translate-x-0 -translate-y-1/2 z-10 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold ml-6 mb-4 text-white">VALGRIT</h1>
        <p class="text-xl md:text-2xl font-semibold mb-6 text-white ">A NOSSA MISSAO</p>
        <a href="#saiba-mais" class="inline-block  hover:bg-red-700 hover:text-white text-text-primary font-semibold text-3xl px-5 py-2 rounded shadow transition duration-300">
            SAIBA MAIS
        </a>
    </div>
</section>


<section class="bg-white py-20" id="development">
    <x-frontend.slide/>
</section>
<section>
    <div class="section-container flex justify-center items-center min-h-[697px] bg-white py-16">
        <div class="w-full max-w-[1500px]">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Destaques</h2>
                <p class="text-gray-500 mb-8 text-lg">Descubra nossa coleção premium de roupas fitness</p>
            </div>

            <x-frontend.product />
           
        </div>
    </div>    
</section>
<section class="flex justify-center items-center min-h-[697px] bg-white py-16">
    <div class="w-full max-w-[1500px] flex flex-col md:flex-row  rounded-lg overflow-hidden">
        <!-- Image Side -->
       <div class="md:w-1/2 w-full h-[350px] md:h-[697px] px-4 lg:px-8">
         <img src="{{ asset('assets/frontend/imagens/foto.jpg') }}"
         alt="Beautiful Design"
         class="w-full h-full object-cover rounded-xl">
       </div>


        <!-- Content Side -->
        <div class="md:w-1/2 w-full flex flex-col justify-start items-center md:items-start p-10 bg-gradient-to-br from-white to-gray-100">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 text-left">Design Impressionante</h1>
            <p class="text-lg md:text-xl text-gray-600 mb-4 text-left">
            Descubra a beleza e sofisticação em cada detalhe. Nossa coleção premium combina conforto, estilo e inovação para elevar seu visual fitness ao próximo nível.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem labore cumque optio! Nostrum minus eum pariatur repudiandae, aperiam debitis consequuntur veritatis deserunt ea vel blanditiis, assumenda optio voluptate beatae. Earum.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores rerum vel sint voluptatum quaerat? Reiciendis, eius! Illo, inventore ad. Nostrum omnis eos itaque iste quasi blanditiis nihil modi dolores quae.
            </p>
        </div>
    </div>
</section>

</x-frontend::layout>

