<x-frontend::layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="page_slug">home</x-slot>

    <!-- Hero Section -->

    <div class="p-10 bg-gray-50 dark:bg-gray-900 flex items-center justify-center px-4">


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

            <div class="space-y-4">
                @if(Auth::guard('admin')->check())
                <a href="{{ url('/admin/dashboard') }}" class="block p-6 bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-200 dark:border-gray-700 hover:border-indigo-500 dark:hover:border-indigo-400">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-indigo-100 dark:bg-indigo-900 rounded-lg">
                            <i data-lucide="layout-dashboard" class="w-6 h-6 text-indigo-600 dark:text-indigo-300"></i>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Go to Admin Dashboard</h2>
                            <p class="text-gray-600 dark:text-gray-400">Access your admin panel</p>
                        </div>
                        <div class="ml-auto text-indigo-600 dark:text-indigo-400">
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </div>
                    </div>
                </a>

                <form method="POST" action="{{ url('/admin/logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full p-6 bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-200 dark:border-gray-700 hover:border-red-500 dark:hover:border-red-400 text-left">
                        <div class="flex items-center space-x-4">
                            <div class="p-3 bg-red-100 dark:bg-red-900 rounded-lg">
                                <i data-lucide="log-out" class="w-6 h-6 text-red-600 dark:text-red-300"></i>
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Logout from Admin</h2>
                                <p class="text-gray-600 dark:text-gray-400">Sign out of your admin account</p>
                            </div>
                            <div class="ml-auto text-red-600 dark:text-red-400">
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </div>
                        </div>
                    </button>
                </form>

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

</x-frontend::layout>