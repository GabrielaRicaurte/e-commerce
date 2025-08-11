<div class="flex flex-col mx-auto my-16">
    <div class="text-center">
        <h1 class="font-bold text-primary text-4xl md:text-5xl" data-aos="fade-up">Productos</h1>
        <p class="font-semibold text-gray-700 dark:text-neutral-400 md:text-xl" data-aos="fade-up">Explora nuestra amplia gama de productos.
        </p>
    </div>
    <div class="flex flex-row flex-wrap justify-center gap-y-4 md:gap-x-5 mx-auto mt-10">
        <div
            class="flex flex-col bg-white dark:bg-neutral-900 shadow-lg hover:shadow-xl border border-gray-200 dark:border-neutral-700 rounded-2xl w-[15rem] md:w-[22rem] h-[25rem] hover:scale-[1.03] transition-transform hover:cursor-pointer" data-aos="fade-up">
            <img class="w-full h-50 object-cover" src="{{ asset('assets/img/producto_1.png') }}" alt="Producto">
            <div class="flex flex-col gap-2 p-6 h-full">
                <h3 class="font-bold text-gray-800 dark:text-white text-xl">Nombre del Producto.</h3>
                <p class="hidden md:block text-gray-600 dark:text-neutral-400 text-sm">Descripción breve y atractiva del producto para
                    captar la atención del usuario.</p>
                <div class="flex md:flex-row flex-col justify-end md:justify-between items-center mt-4 h-full">
                    <span class="font-bold text-primary text-lg">$199.99</span>
                    <a href="#"
                        class="inline-flex items-center gap-2 bg-primary hover:bg-secondary px-4 py-2 rounded-lg font-semibold text-white transition-colors">
                        Ver Producto
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>



    </div>

    <div class="flex justify-center mt-10" data-aos="fade-up">
        <a href="#" class="flex items-center gap-2 bg-secondary hover:bg-primary shadow-lg px-5 py-2 rounded-xl font-semibold text-white text-base transition-all duration-200">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</div>
