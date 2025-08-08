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
}' class="mb-10">
    <div class="flex flex-col items-center gap-4 mt-10 px-6 pt-10">
        <div class="flex gap-4">
            <template x-for="(persona, index) in personas" :key="index">
                <img
                    :src="persona.imagen"
                    :alt="'Foto de ' + persona.nombre"
                    class="border-4 rounded-full w-24 h-24 object-cover transition-all cursor-pointer"
                    :class="selected === index ? 'border-[#FF6600] scale-105' : 'border-transparent'"
                    @click="selected = index"
                >
            </template>
        </div>
        <div class="mt-4 text-center">
            <h2 class="font-bold text-[#FF6600] text-2xl" x-text="personas[selected].nombre"></h2>
            <p class="font-semibold text-gray-600" x-text="personas[selected].cargo"></p>
            <p class="mt-2 text-gray-600" x-text="personas[selected].descripcion"></p>
        </div>
    </div>
</div>
