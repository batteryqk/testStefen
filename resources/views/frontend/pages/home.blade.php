<x-frontend::layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="page_slug">home</x-slot>




<section class="relative mb-10">
    <img src="{{ asset('assets/frontend/imagens/foto.jpg') }}" alt="About Us Background" class="w-full h-[655px] object-cover">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute left-1/2 top-[65%] md:left-20 md:top-1/2 transform -translate-x-1/2 md:-translate-x-0 -translate-y-1/2 z-10 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">VALGRIT</h1>
        <p class="text-xl md:text-2xl font-semibold mb-6 text-white">A NOSSA MISSAO</p>
        <a href="#saiba-mais" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded shadow transition duration-300">
            SAIBA MAIS
        </a>
    </div>
</section>


<section>
    <x-frontend.slide/>
</section>
<section>
    <div class="section-container flex justify-center items-center min-h-[697px] bg-white py-16">
        <div class="w-full max-w-[1270px]">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Destaques</h2>
                <p class="text-gray-500 mb-8 text-lg">Descubra nossa coleção premium de roupas fitness</p>
            </div>
            <x-frontend.product />
           
        </div>
    </div>    
</section>
</x-frontend::layout>

