<div class="relative bg-[#DADADA] md:bg-white md:dark:bg-neutral-900 mt-21 h-96 md:h-[45rem]">
    <div class="md:hidden flex justify-end items-end w-full h-full">
        <img src="{{ asset('assets/img/img_header.png') }}" alt=""
            class="w-90 md:w-[40rem] h-90 md:h-[40rem] object-cover">

        <div class="top-0 left-0 z-30 absolute px-10 py-10 w-full h-full">
            <p class="md:px-10 rounded-lg font-semibold text-2xl md:text-5xl">Encontraras los mejores productos para tu
                hogar, con los mejores precios y calidad.</p>
            <button
                class="bg-[#FF6600] hover:bg-[#ff5100] shadow-sm mt-3 px-4 py-2 rounded-2xl font-semibold text-white text-sm cursor-pointer">Ver
                Productos</button>
        </div>
    </div>

    <div class="hidden md:block w-full h-full">
        <div class="flex justify-center h-[40rem] splide">
            <div class="w-[80rem] splide__track">
                <ul class="splide__list">
                    <li class="relative flex md:flex-row flex-col bg-[#dadada] rounded-3xl splide__slide">
                        <div class="z-20 flex flex-col items-start px-25 py-30">
                            <h2 class="mb-2 md:mb-4 font-extrabold text-[#FF6600] text-3xl md:text-5xl">Audifonos
                            </h2>
                            <p class="mb-4 font-medium text-gray-700 md:text-2xl text-3xl">¡Campaña especial! Lleva la
                                comodidad a tu hogar con un <span class="font-bold text-[#FF6600]">20% de
                                    descuento</span>.</p>
                            <span class="mb-3 font-bold text-[#FF6600] text-2xl md:text-3xl">$499</span>
                            <button
                                class="bg-[#FF6600] hover:bg-[#ff5100] shadow mt-2 px-6 py-3 rounded-xl font-bold text-white text-base md:text-xl transition-all">Comprar
                                ahora</button>
                        </div>

                        <div class="z-10 absolute flex justify-end items-end rounded-bl-3xl w-full h-full">
                            <img src="{{ asset('assets/img/img_header.png') }}" alt=""
                                class="rounded-3xl w-90 md:w-[40rem] h-90 md:h-[40rem] object-cover">
                        </div>
                    </li>

                    <li class="relative flex md:flex-row flex-col bg-gradient-to-r from-gray-300 via-gray-200 to-gray-400 rounded-3xl splide__slide">
                        <div class="z-20 flex flex-col justify-center items-start px-25">
                            <h2 class="mb-2 md:mb-4 font-extrabold text-[#FF6600] text-3xl md:text-5xl">Linternas
                            </h2>
                            <p class="mb-4 font-medium text-black text-lg md:text-2xl">¡Ilumina tu camino con nuestras
                                linternas de alta calidad!</p>
                            <span class="mb-3 font-bold text-[#FF6600] text-2xl md:text-3xl">$499</span>
                            <button
                                class="bg-[#FF6600] hover:bg-[#ff5100] shadow mt-2 px-6 py-3 rounded-xl font-bold text-white text-base md:text-xl transition-all">Comprar
                                ahora</button>
                        </div>

                        <div class="z-10 absolute flex justify-end items-center px-20 w-full h-full">
                            <img src="{{ asset('assets/img/producto_2.png') }}" alt=""
                                class="shadow-2xl rounded-3xl w-90 md:w-[25rem] h-90 md:h-[25rem] object-cover">
                        </div>
                    </li>

                    <li class="relative flex md:flex-row flex-col bg-gradient-to-r from-gray-300 via-gray-300 to-gray-200 rounded-3xl splide__slide">
                        <div class="z-10 absolute flex justify-end items-center px-20 w-full h-full">
                            <img src="{{ asset('assets/img/producto_3.png') }}" alt=""
                                class="shadow-2xl rounded-3xl w-90 md:w-[25rem] h-90 md:h-[25rem] object-cover">
                        </div>
                        <div class="z-20 flex flex-col justify-center items-start px-25">
                            <h2 class="mb-2 md:mb-4 font-extrabold text-[#FF6600] text-3xl md:text-5xl">Zapatos
                            </h2>
                            <p class="mb-4 font-medium text-black text-lg md:text-2xl">Los calzados más cómodos y elegantes
                                para ti.</p>
                            <span class="mb-3 font-bold text-[#FF6600] text-2xl md:text-3xl">$499</span>
                            <button
                                class="bg-[#FF6600] hover:bg-[#ff5100] shadow mt-2 px-6 py-3 rounded-xl font-bold text-white text-base md:text-xl transition-all">Comprar
                                ahora</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
