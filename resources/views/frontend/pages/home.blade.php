<x-frontend::layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="page_slug">home</x-slot>




<section class="relative mb-10  mb-30">
    <img src="{{ asset('assets/frontend/imagens/foto.jpg') }}" alt="About Us Background" class="w-[1920px] h-[655px] object-cover">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute left-20 top-1/2 transform -translate-y-1/2 z-10 text-left">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">VALGRIT </h1>
        <p class="text-xl md:text-2xl font-semibold mb-6 text-white">A NOSSA MISSAO </p>
        <a href="#saiba-mais" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded shadow transition duration-300">SAIBA MAIS</a>
    </div>
</section>
<section>
    <x-frontend.slide/>
</section>
<section>
    <div class="section-container ">
                <div class="text-center mb-16">
                <h2 class="text-4xl  text-heading-text mb-4">Destaques</h2>
                <p class="text-gray-500 mb-5">Descubra nossa coleção premium de roupas fitness</p>
                <x-frontend.product />
              
                </div>
    
</section>
</x-frontend::layout>