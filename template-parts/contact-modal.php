<!-- Modal fondo oscuro -->
<div id="contactModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 hidden">
  <!-- Contenedor del modal -->
  <div class="bg-white md:flex rounded-2xl overflow-hidden shadow-lg max-w-4xl w-full">
    
    <!-- Lado izquierdo -->
    <div class="bg-white md:w-1/2 px-6 py-10 text-center flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-indigo-900 mb-4">¡Contáctanos!</h2>
      <p class="text-gray-700">Nos comunicaremos contigo lo más pronto posible</p>
    </div>

    <!-- Lado derecho -->
    <div class="bg-purple-100 md:w-1/2 px-6 py-10">
      <form class="space-y-4">
        <input type="text" placeholder="Ingrese nombre y apellido" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
        <input type="email" placeholder="Correo electrónico" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
        <input type="tel" placeholder="Número de teléfono" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400">
        <textarea rows="4" placeholder="Ingrese una breve descripción" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-400"></textarea>
        <button type="submit" class="w-full bg-yellow-400 text-indigo-900 font-semibold py-2 rounded-md hover:bg-yellow-300 transition">Enviar</button>
      </form>
    </div>

    <!-- Botón cerrar -->
    <button onclick="closeContactModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>
  </div>
</div>