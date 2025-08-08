<div class="md:w-6/12">
    <div class="bg-white shadow-lg mx-auto mt-5 md:mb-20 p-8 rounded-xl md:w-[80rem] max-w-xl">
        <h2 class="mb-2 font-bold text-[#FF6600] text-3xl">Contáctanos</h2>
        <p class="mb-6 text-[#FF6600]">¿Tienes alguna pregunta? ¡Estamos aquí para ayudarte!</p>

        <ul class="space-y-2 mb-8">
            <li>
                <strong class="text-gray-700">Teléfono:</strong>
                <a href="tel:+521234567890" class="font-medium text-gray-600 hover:underline">+52 123 456 7890</a>
            </li>
            <li>
                <strong class="text-gray-700">Email:</strong>
                <a href="mailto:contacto@tiendavirtual.com"
                    class="font-medium text-gray-600 hover:underline">contacto@tiendavirtual.com</a>
            </li>
            <li>
                <strong class="text-gray-700">WhatsApp:</strong>
                <a href="https://wa.me/521234567890" target="_blank"
                    class="font-medium text-gray-600 hover:underline">+52 123 456 7890</a>
            </li>
        </ul>

        <h3 class="mb-4 font-semibold text-[#FF6600] text-xl">Envíanos un mensaje</h3>
        <form wire:submit.prevent="enviarMensaje" class="space-y-5">
            <div>
                <label for="nombre" class="block mb-1 text-gray-700">Nombre</label>
                <input type="text" id="nombre" wire:model="nombre" required
                    class="bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#FF6600] focus:ring-2 w-full transition">
            </div>
            <div>
                <label for="email" class="block mb-1 text-gray-700">Correo electrónico</label>
                <input type="email" id="email" wire:model="email" required
                    class="bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#FF6600] focus:ring-2 w-full transition">
            </div>
            <div>
                <label for="mensaje" class="block mb-1 text-gray-700">Mensaje</label>
                <textarea id="mensaje" wire:model="mensaje" required
                    class="bg-gray-50 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-[#FF6600] focus:ring-2 w-full h-28 transition resize-none"></textarea>
            </div>
            <button type="submit"
                class="bg-[#ff5100] hover:bg-[#FF6600] shadow px-6 py-2 rounded-lg font-semibold text-white transition">Enviar</button>
        </form>
    </div>

</div>
