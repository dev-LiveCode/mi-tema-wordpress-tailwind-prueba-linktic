<?php

function livecode_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/css/output.css');
}
add_action('wp_enqueue_scripts', 'livecode_enqueue_styles');

// Registro del CPT "Libros"
function crear_cpt_libros() {
    // $labels = array(
    //     'name' => 'Libros',
    //     'singular_name' => 'Libro',
    //     'menu_name' => 'Libros',
    //     'name_admin_bar' => 'Libro',
    //     'add_new' => 'Agregar nuevo',
    //     'add_new_item' => 'Agregar nuevo libro',
    //     'edit_item' => 'Editar libro',
    //     'new_item' => 'Nuevo libro',
    //     'view_item' => 'Ver libro',
    //     'search_items' => 'Buscar libros',
    //     'not_found' => 'No encontrado',
    //     'not_found_in_trash' => 'No encontrado en la papelera',
    // );

    // $args = array(
    //     'labels' => $labels,
    //     'public' => true,
    //     'show_in_menu' => true,
    //     'menu_position' => 5,
    //     'menu_icon' => 'dashicons-book-alt', // Ícono de libro
    //     'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    //     'has_archive' => true,
    //     'rewrite' => array('slug' => 'libros'),
    //     'show_in_rest' => true, 
    // );
    $labels = array(
        'name'                  => _x('Libros', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Libro', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Libros', 'textdomain'),
        'name_admin_bar'        => __('Libro', 'textdomain'),
        'add_new'               => __('Agregar nuevo', 'textdomain'),
        'add_new_item'          => __('Agregar nuevo libro', 'textdomain'),
        'edit_item'             => __('Editar libro', 'textdomain'),
        'new_item'              => __('Nuevo libro', 'textdomain'),
        'view_item'             => __('Ver libro', 'textdomain'),
        'search_items'          => __('Buscar libros', 'textdomain'),
        'not_found'             => __('No se encontraron libros', 'textdomain'),
        'not_found_in_trash'    => __('No se encontraron libros en la papelera', 'textdomain'),
    );

    $args = array(
        'label'                 => __('Libros', 'textdomain'),
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'libros'),
        'menu_icon'             => 'dashicons-book',
        'supports'              => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest'          => true, // para Gutenberg o headless
    );

    register_post_type('libros', $args);
}
add_action('init', 'crear_cpt_libros');


// Registro de la taxonomía "Géneros"
function crear_taxonomia_generos() {
    $labels = array(
        'name' => 'Géneros',
        'singular_name' => 'Género',
        'search_items' => 'Buscar géneros',
        'all_items' => 'Todos los géneros',
        'parent_item' => 'Género superior',
        'parent_item_colon' => 'Género superior:',
        'edit_item' => 'Editar género',
        'update_item' => 'Actualizar género',
        'add_new_item' => 'Agregar nuevo género',
        'new_item_name' => 'Nombre del nuevo género',
        'menu_name' => 'Géneros',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'generos'),
        'show_in_rest' => true,
    );

    register_taxonomy('generos', array('libros'), $args);
}
add_action('init', 'crear_taxonomia_generos');


// Agregar metabox para "Autor del libro"
function agregar_metabox_autor() {
    add_meta_box(
        'autor_libro_metabox',
        'Autor del Libro',
        'mostrar_metabox_autor',
        'libros',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'agregar_metabox_autor');

function mostrar_metabox_autor($post) {
    $autor = get_post_meta($post->ID, '_autor_libro', true);
    ?>
    <label for="autor_libro">Nombre del autor:</label>
    <input type="text" name="autor_libro" id="autor_libro" value="<?php echo esc_attr($autor); ?>" class="widefat">
    <?php
}

// Guardar metadato del autor
function guardar_autor_libro($post_id) {
    if (array_key_exists('autor_libro', $_POST)) {
        update_post_meta($post_id, '_autor_libro', sanitize_text_field($_POST['autor_libro']));
    }
}
add_action('save_post', 'guardar_autor_libro');

?>