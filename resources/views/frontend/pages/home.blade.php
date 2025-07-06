<x-frontend::layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="page_slug">home</x-slot>




<section class="relative ">
    <img src="{{ asset('assets/frontend/imagens/foto.jpg') }}" alt="About Us Background" class="w-full h-[655px] object-cover">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute left-1/2 top-[65%] md:left-20 md:top-1/2 transform -translate-x-1/2 md:-translate-x-0 -translate-y-1/2 z-10 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold ml-6 mb-1/2  text-white">VALGRIT</h1>
        <p class="text-xl md:text-2xl font-semibold mb-3 text-white ">A NOSSA MISSAO</p>
        <a href="#saiba-mais" class="inline-block  hover:bg-red-700 hover:text-white text-text-primary font-semibold text-2xl px-5 py-1 rounded shadow transition duration-300">
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
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 text-left">Experimente a Diferença da Valgrit: Qualidade Que Se Sente em Cada Fibra!</h1>
            <p class="text-lg md:text-xl text-gray-600 mb-4 text-left">
           Na Valgrit, não vendemos apenas roupa desportiva – entregamos uma experiência de performance e conforto incomparáveis.
  Cada peça é cuidadosamente desenhada e fabricada com os melhores materiais, garantindo que se sinta no seu melhor, quer esteja a superar os seus limites no ginásio ou a desfrutar de uma corrida ao ar livre.

Porque Escolher Valgrit?

Durabilidade Superior: Feita para durar, a nossa roupa resiste ao desgaste do treino intenso e às lavagens frequentes, mantendo a sua forma e cor como novas por muito mais tempo. Diga adeus à roupa que cede ou desbota após algumas utilizações!

Conforto Inigualável: Selecionamos tecidos respiráveis e de toque suave que se movem consigo, proporcionando liberdade total de movimentos e mantendo a sua pele fresca e seca, mesmo nos treinos mais exigentes. Sinta a diferença de um conforto que o impulsiona.

Estilo Que Inspira: Com designs modernos e cortes que realçam a sua silhueta, a roupa Valgrit fará com que se sinta confiante e motivado. Porque sabemos que quando se sente bem, treina melhor.

Investimento Inteligente: Ao escolher Valgrit, está a investir em peças que o acompanharão nas suas jornadas desportivas por anos. Menos compras, mais treinos, mais resultados.

  Não se contente com menos. Eleve o seu treino e o seu estilo com a Valgrit. Sinta a qualidade, viva a performance! Visite a nossa loja online e descubra a peça perfeita para si.
            </p>
        </div>
    </div>
</section>

</x-frontend::layout>

