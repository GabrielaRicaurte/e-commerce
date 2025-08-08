{{--
    Componente Alpine.js para mostrar información del equipo en la página "Quiénes Somos".

    - Utiliza Alpine.js con la propiedad `x-data` para manejar el estado local.
    - `personas`: Array de objetos que representa a cada miembro del equipo, incluyendo nombre, cargo, imagen y descripción.
    - `selected`: Índice del miembro actualmente seleccionado.
    - Muestra los avatares de cada persona en una fila. Al hacer clic en un avatar, se actualiza el miembro seleccionado.
    - El miembro seleccionado se resalta con un borde naranja y un efecto de escala.
    - Debajo de los avatares, se muestra el nombre, cargo y descripción del miembro seleccionado.
    - El diseño utiliza Tailwind CSS para estilos responsivos y modernos.
--}}
<div x-data='{
    selected: 0,
    personas: [
        {
            nombre: "Juan Pérez",
            cargo: "Fundador y CEO",
            imagen: "https://randomuser.me/api/portraits/men/32.jpg",
            descripcion: "Juan lidera nuestra tienda en línea, asegurando la mejor experiencia de compra y productos de alta calidad para nuestros clientes."
        },
        {
            nombre: "Ana Gómez",
            cargo: "Gerente de Ventas",
            imagen: "https://randomuser.me/api/portraits/women/44.jpg",
            descripcion: "Ana se encarga de coordinar el equipo de ventas y garantizar la satisfacción de nuestros clientes."
        }
        // Puedes agregar más personas aquí
    ]
}'
    class="mb-10">
    <div class="flex flex-col justify-center items-center gap-8 mx-auto mt-10 px-5 py-12 rounded-xl md:w-6/12 max-w-3xl">
        <!-- Avatares modo teléfono (default) -->
        <div class="md:hidden flex flex-row justify-center gap-4">
            <template x-for="(persona, index) in personas" :key="index">
                <img :src="persona.imagen" :alt="'Foto de ' + persona.nombre"
                    class="shadow-md border-4 rounded-full w-25 h-25 object-cover transition-all duration-200 cursor-pointer"
                    :class="selected === index ? 'border-[#FF6600] scale-105 ring-2 ring-[#FF6600]' : 'border-gray-200'"
                    @click="selected = index">
            </template>
        </div>
        <!-- Tarjetas modo grande (md y arriba) -->
        <div class="hidden md:flex md:flex-row md:justify-center md:gap-8 md:w-[full]">
            <template x-for="(persona, index) in personas" :key="index">
                <div class="flex flex-col items-center bg-white shadow-md p-6 rounded-xl w-80 transition-all duration-200 cursor-pointer"
                    :class="selected === index ? 'border-2 border-[#FF6600] scale-105 ring-2 ring-[#FF6600]' :
                        'border border-gray-200'"
                    @click="selected = index">
                    <img :src="persona.imagen" :alt="'Foto de ' + persona.nombre"
                        class="shadow-md mb-4 border-4 rounded-full w-30 h-30 object-cover"
                        :class="selected === index ? 'border-[#FF6600]' : 'border-gray-200'">
                    <h2 class="mb-1 font-bold text-[#FF6600] text-xl" x-text="persona.nombre"></h2>
                    <p class="mb-2 font-semibold text-gray-700 text-base" x-text="persona.cargo"></p>
                    <p class="mb-2 text-gray-600 text-sm leading-relaxed" x-text="persona.descripcion"></p>
                </div>
            </template>
        </div>
        <!-- Info del seleccionado solo en móvil -->
        <div class="md:hidden flex flex-col items-center text-center">
            <h2 class="mb-1 font-bold text-[#FF6600] text-2xl" x-text="personas[selected].nombre"></h2>
            <p class="mb-2 font-semibold text-gray-700 text-lg" x-text="personas[selected].cargo"></p>
            <p class="mb-2 text-gray-600 text-base leading-relaxed" x-text="personas[selected].descripcion"></p>
        </div>
    </div>
</div>
