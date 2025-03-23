<?php get_header(); ?>

<section class="container mx-auto pb-10 px-4 pt-[250px]">
  <h1 class="text-4xl font-bold mb-6 text-gray-900 dark:text-pink-600">Listado de Libros</h1>

  <?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php while (have_posts()) : the_post(); ?>
        <article class="border p-4 rounded shadow hover:shadow-lg transition-all bg-white dark:bg-gray-700 dark:text-white">
          <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
              <?php the_post_thumbnail('medium', ['class' => 'w-full h-auto rounded']); ?>
            </div>
          <?php endif; ?>

          <h2 class="text-xl font-semibold mb-2">
            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
              <?php the_title(); ?>
            </a>
          </h2>

          <div class="text-sm text-gray-600 dark:text-gray-300 mb-2">
            <?php the_excerpt(); ?>
          </div>

          <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline">
            Ver más →
          </a>
        </article>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p>No hay libros disponibles aún.</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>