<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/img/img-logo-1.png') }}" class="h-10" alt="Mitro Utomo Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Mitro Utomo</span>
        </a>
        <div class="flex gap-2 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="text-primary bg-transparent border-2 border-primary hover:bg-slate-200 font-medium rounded-lg text-sm px-4 py-2 text-center">Login</button>
            <button type="button"
                class="hidden md:block text-primary bg-accent hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2 text-center">Sign Up</button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="#home"
                        class="block py-2 px-3 text-primary hover:bg-gray-100 rounded md:hover:bg-transparent md:hover:text-secondary md:text-primary md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about"
                        class="block py-2 px-3 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:p-0">About Us</a>
                </li>
                <li>
                    <a href="#product"
                        class="block py-2 px-3 text-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:p-0">Product</a>
                </li>
                <li class="md:hidden block">
                    <a href="#product"
                        class="block text-center py-2 px-3 text-primary rounded bg-accent hover:bg-yellow-500 md:hover:bg-transparent md:hover:text-secondary md:p-0">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
