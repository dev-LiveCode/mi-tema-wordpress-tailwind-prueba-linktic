<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 lg:grid-cols-2 items-center">
    
    <!-- Texto lado izquierdo -->
    <div>
      <h6 class="text-base text-gray-400 uppercase tracking-widest mb-6 font-rubik font-bold">Nuestra Misión</h6>
      <h2 class="text-3xl md:text-5xl font-playfairDisplay font-extrabold text-indigo-900 mb-6">
        Wimbu dará soluciones ajustadas a tu objetivo comercial
      </h2>
      <p class="text-gray-600 mb-6 font-rubik text-xl">
        Nuestras estrategias darán visibilidad y óptimos resultados a tu empresa, porque implementamos un conjunto de acciones que mejorarán el estado actual y futuro de la misma.
      </p>

      <!-- Lista de servicios -->
      <ul class="space-y-4 text-gray-600 text-xl font-rubik">
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
            <!-- Icono SVG Check -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          E-mail Marketing.
        </li>
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          Posicionamiento en buscadores SEO.
        </li>
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          Campañas SEM (Search Engine Marketing).
        </li>
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          Campañas SMO (Social Media Optimization).
        </li>
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          Captación de clientes potenciales.
        </li>
        <li class="flex items-start">
          <span class="w-6 h-6 mr-3 mt-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="check" class="w-5 h-5 mr-2 mt-1">
          </span>
          Posicionamiento de marca.
        </li>
      </ul>

      <!-- Botón -->
      <div class="mt-8">
        <button type="button" onclick="openContactModal()" class="button-header inline-block bg-yellow-400  hover:bg-yellow-500 transition duration-300 shadow-lg shadow-gray-500">
          Contáctanos
        </button>
      </div>
    </div>

    <!-- Ilustración lado derecho -->
    <div class="flex justify-center">
      <img src="<?php echo wp_get_attachment_url(attachment_url_to_postid('http://localhost:10004/wp-content/uploads/2025/03/Illustraciones-wimbu-04.png')); ?>" alt="Ilustración estrategia comercial" class="xl:scale-125">
      <!-- Puedes poner un SVG inline aquí también si quieres que sea vectorial y no una imagen -->
    </div>

  </div>
</section>