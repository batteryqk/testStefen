<section class="bg-text-secondary "> <!-- Added pt-20 to prevent content overlap -->

 <nav class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <div class="flex items-center">
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-text-black hover:text-text-primary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                        <span class="sr-only">Open main menu</span>
                        <svg id="hamburger-icon" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 hidden md:block">
                    <a href="{{ route('f.home') }}" class="flex items-center space-x-2">
                        <img src="{{ asset('frontend/images/logo.PNG') }}" alt="Valgrit Logo" class="h-14">
                    </a>
                </div>
            </div>

            <div class="flex-grow flex justify-center items-center">
                <div class="md:hidden">
                    <a href="{{ route('f.home') }}">
                        <img src="{{ asset('frontend/images/logo.PNG') }}" alt="Valgrit Logo" class="h-10">
                    </a>
                </div>
                <div class="hidden md:flex items-baseline space-x-10">
                    <a href="{{ route('f.home') }}"
                        class="group relative nav-link px-3 py-2 rounded-md text-2xl font-bold transition-colors duration-300 ease-in-out {{ request()->routeIs('f.home') ? 'text-text-primary' : 'text-text-black hover:text-text-primary' }}">
                        Início
                        <span
                            class="absolute bottom-0 left-0 h-0.5 bg-text-primary transition-all duration-300 ease-in-out {{ request()->routeIs('f.home') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                    <a href="{{ route('f.products') }}"
                        class="group relative nav-link px-3 py-2 rounded-md text-2xl font-bold transition-colors duration-300 ease-in-out {{ request()->routeIs('f.products') ? 'text-text-primary' : 'text-text-black hover:text-text-primary' }}">
                        Produtos
                        <span
                            class="absolute bottom-0 left-0 h-0.5 bg-text-primary transition-all duration-300 ease-in-out {{ request()->routeIs('f.products') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                    <a href="{{ route('f.shop') }}"
                        class="group relative nav-link px-3 py-2 rounded-md text-2xl font-bold transition-colors duration-300 ease-in-out {{ request()->routeIs('f.shop') ? 'text-text-primary' : 'text-text-black hover:text-text-primary' }}">
                        Loja
                        <span
                            class="absolute bottom-0 left-0 h-0.5 bg-text-primary transition-all duration-300 ease-in-out {{ request()->routeIs('f.shop') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                    </a>
                </div>
            </div>

            <div class="flex justify-end items-center space-x-6">
                {{-- Your icon buttons --}}
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('f.home') }}"
                class="nav-link block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('f.home') ? 'text-text-primary bg-gray-50' : 'text-text-black hover:text-text-primary hover:underline deuration-300 hover:bg-gray-50' }}">Início</a>
            <a href="{{ route('f.products') }}"
                class="nav-link block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('f.products') ? 'text-text-primary bg-gray-50' : 'text-text-black hover:text-text-primary hover:underline deuration-300 hover:bg-gray-50' }}">Produtos</a>
            <a href="{{ route('f.shop') }}"
                class="nav-link block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('f.shop') ? 'text-text-primary bg-gray-50' : 'text-text-black hover:text-text-primary hover:underline deuration-300 hover:bg-gray-50' }}">Loja</a>
        </div>
    </div>
</nav>



</section>
