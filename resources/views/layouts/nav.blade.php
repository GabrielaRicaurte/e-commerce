<header class="top-0 z-50 fixed inset-x-0 flex flex-wrap sm:flex-nowrap sm:justify-start bg-[#DADADA] md:bg-white dark:bg-neutral-900 py-6 w-full text-sm">
    <nav class="sm:flex sm:justify-between sm:items-center mx-auto px-4 w-full max-w-[85rem]">
        <div class="flex justify-between items-center">
            <a class="flex-none focus:opacity-80 px-3 focus:outline-hidden font-bold text-[#FF6600] dark:text-white text-xl"
                href="#" aria-label="Brand">
                E-commerce
            </a>
            <div class="sm:hidden">
                {{-- Menu Toggle --}}
                <button type="button"
                    class="hs-collapse-toggle relative flex justify-center items-center gap-x-2 bg-white hover:bg-gray-50 focus:bg-gray-50 dark:bg-transparent dark:hover:bg-white/10 dark:focus:bg-white/10 disabled:opacity-50 shadow-2xs border border-gray-200 dark:border-neutral-700 rounded-lg focus:outline-hidden size-9 text-gray-800 dark:text-white disabled:pointer-events-none"
                    id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hidden hs-collapse-open:block size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>
        <div id="hs-navbar-example"
            class="hidden hs-collapse sm:block overflow-hidden transition-all duration-300 basis-full grow"
            aria-labelledby="hs-navbar-example-collapse">
            <div class="flex sm:flex-row flex-col sm:justify-end sm:items-center gap-5 mt-5 sm:mt-0 sm:ps-5">
                {{-- Links --}}
                <a class="focus:outline-hidden font-medium text-[#FF6600]" href="#" aria-current="page">Home</a>
                <a class="focus:outline-hidden font-medium text-gray-600 hover:text-[#FF6600] focus:text-gray-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500 dark:text-neutral-400"
                    href="#">Productos</a>
                <a class="focus:outline-hidden font-medium text-gray-600 hover:text-[#FF6600] focus:text-gray-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500 dark:text-neutral-400"
                    href="#">Contactanos</a>

                {{-- Theme Toggle --}}
                <button id="themeToggle" type="button" aria-label="Cambiar tema"
                    class="inline-flex justify-center items-center bg-white hover:bg-gray-50 dark:bg-transparent dark:hover:bg-white/10 disabled:opacity-50 border border-gray-200 dark:border-neutral-700 rounded-lg focus:outline-hidden size-9 text-gray-700 dark:text-neutral-200 disabled:pointer-events-none">
                    <!-- Icono Luna (mostrar en tema claro) -->
                    <svg class="dark:hidden block size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                    </svg>
                    <!-- Icono Sol (mostrar en tema oscuro) -->
                    <svg class="hidden dark:block size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364-1.414-1.414M7.05 7.05 5.636 5.636m12.728 0L16.95 7.05M7.05 16.95 5.636 18.364M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</header>
