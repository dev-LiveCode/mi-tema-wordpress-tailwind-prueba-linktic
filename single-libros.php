<?php get_header(); ?>

<div class="container mx-auto py-12 px-6 pt-[250px]">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="bg-gray-50 dark:bg-gray-700 rounded-xl shadow-md py-6 px-6 lg:px-10 space-y-6">
            <h1 class="text-gray-900 dark:text-pink-600 text-3xl font-bold text-center"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="w-full max-w-xl">
                    <?php the_post_thumbnail('large', ['class' => 'rounded-lg w-full']); ?>
                </div>
            <?php endif; ?>

            <div class="text-gray-600 dark:text-gray-300 leading-relaxed">
                <?php the_content(); ?>
            </div>

            <div class="text-gray-600 dark:text-gray-300 text-sm">
                <strong>Autor:</strong>
                <?php echo esc_html(get_post_meta(get_the_ID(), '_autor_libro', true)); ?>
            </div>

            <div class="text-gray-600 dark:text-gray-300 text-sm">
                <strong>Géneros:</strong>
                <?php
                    $generos = get_the_terms(get_the_ID(), 'generos');
                    if ($generos && !is_wp_error($generos)) {
                        $lista = wp_list_pluck($generos, 'name');
                        echo implode(', ', $lista);
                    } else {
                        echo 'Sin géneros asignados.';
                    }
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>