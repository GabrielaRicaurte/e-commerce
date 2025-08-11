<div class="relative md:dark:bg-neutral-900 mt-21 h-96 md:h-[45rem]">
    <div class="md:hidden flex justify-end items-end bg-background w-full h-full">
        <img src="{{ asset('assets/img/productos/productos_1.png') }}" alt=""
            class="p-10 w-80 h-80">

        <div class="top-0 left-0 z-30 absolute px-10 py-10 w-full h-full">
            <h1 class="font-bold text-primary text-2xl">Descubre lo que buscas</h1>
            <p class="pr-10 rounded-lg font-semibold text-xl">Explora productos para tu hogar, tecnología, moda y más. Encuentra calidad y <br> estilo en cada categoría.</p>
            <button
                class="bg-primary hover:bg-secondary shadow-sm mt-3 px-4 py-2 rounded-2xl font-semibold text-white text-sm cursor-pointer">Ver
                Productos</button>
        </div>
    </div>

    <div class="hidden md:block bg-[#fff9e1] mx-auto rounded-3xl w-9/12 h-full">
        <div class="flex justify-center items-center w-full h-full">
            <div class="z-20 flex flex-col md:justify-center items-start px-25 py-30 md:w-[60rem]">
                <h2 class="mb-2 md:mb-4 font-extrabold text-primary text-3xl md:text-5xl" data-aos="fade-right">Descubre
                    lo que buscas</h2>
                <p class="mb-4 font-medium text-gray-700 md:text-lg text-3xl" data-aos="fade-right"
                    data-aos-duration="1000">
                    Descubre una amplia selección de productos para tu hogar, tecnología, moda y mucho más.
                    Navega por nuestras categorías y encuentra artículos de calidad que se adaptan a tus
                    necesidades y estilo de vida.
                </p>
                <button
                    class="bg-primary hover:bg-secondary shadow mt-5 px-6 py-3 rounded-xl font-bold text-white text-base md:text-xl transition-all hover:cursor-pointer"
                    data-aos="fade-right" data-aos-duration="1000">
                    Ver productos
                </button>
            </div>
            <div class="w-5/12 splide">
                <div class="w-full splide__track">
                    <ul class="splide__list">
                        <li class="flex justify-center items-center pr-20 splide__slide">
                            <img src="{{ asset('assets/img/productos/productos_1.png') }}" alt="Product 1"
                                class="h-[30rem]">
                        </li>
                        <li class="flex justify-center items-center pr-20 splide__slide">
                            <img src="{{ asset('assets/img/productos/productos_2.png') }}" alt="Product 2"
                                class="h-[30rem]">
                        </li>
                        <li class="flex justify-center items-center pr-20 splide__slide">
                            <img src="{{ asset('assets/img/productos/productos_3.png') }}" alt="Product 3"
                                class="h-[30rem]">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
