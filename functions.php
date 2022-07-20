<?php


function plz_assets()
{

    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600", array(), false, 'all');
    wp_register_style("google-font-2", "https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700", array(), false, 'all');
    wp_register_script("jquery", "https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js", array(), "3-6", 'all');

    wp_enqueue_style("estilos", get_template_directory_uri() . "/assets/css/style.css", array("google-font", "google-font-2"));
}

add_action("wp_enqueue_scripts", "plz_assets");





function plz_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'custom-logo',
        array(
            "width" => 170,
            "height" => 35,
            "flex-width" => true,
            "flex-height" => true,
        )
    );
}

add_action("after_setup_theme", "plz_theme_supports");

function plz_add_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => "Menu principal",
            'menu-responsive' => "Menu responsive"
        )
    );
}

add_action("after_setup_theme", "plz_add_menus");


function plz_add_custom_post_type()
{

    $labels = array(
        'name' => 'Inmueble',
        'singular_name' => 'Inmueble',
        'all_items' => 'Todos los inmuebles',
        'add_new' => 'Añadir inmueble',
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Inmuebles para listar en el catálogo.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'show_ui'            => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'inmueble'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-admin-home',
    );

    register_post_type('inmueble', $args);
}

add_action("init", "plz_add_custom_post_type");









//create a custom taxonomy name it subjects for your posts

function create_subjects_hierarchical_taxonomy()
{

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x('Zonas', 'taxonomy general name'),
        'singular_name' => _x('Zona', 'taxonomy singular name'),
        'search_items' =>  __('Buscar zonas'),
        'all_items' => __('Todas las zonas'),
        'parent_item' => __('Localidad padre'),
        'parent_item_colon' => __('Localidad padre:'),
        'edit_item' => __('Editar zona'),
        'update_item' => __('Actualizar zona'),
        'add_new_item' => __('Añadir nueva zona'),
        'new_item_name' => __('Nombre nueva zona'),
        'menu_name' => __('Zonas'),
    );

    // Now register the taxonomy
    register_taxonomy('zonas', array('inmueble'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'zona'),
    ));

    $labels = array(
        'name' => _x('Tipos', 'taxonomy general name'),
        'singular_name' => _x('Tipo', 'taxonomy singular name'),
        'search_items' =>  __('Buscar zonas'),
        'all_items' => __('Todas los tipos'),
        'parent_item' => __('Localidad padre'),
        'parent_item_colon' => __('Localidad padre:'),
        'edit_item' => __('Editar tipo'),
        'update_item' => __('Actualizar tipo'),
        'add_new_item' => __('Añadir nuevo tipo'),
        'new_item_name' => __('Nombre nuevo tipo'),
        'menu_name' => __('Tipos de operación'),
    );

    // Now register the taxonomy
    register_taxonomy('tipos', array('inmueble'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tipo'),
    ));

    $labels = array(
        'name' => _x('Propiedad', 'taxonomy general name'),
        'singular_name' => _x('Propiedad', 'taxonomy singular name'),
        'search_items' =>  __('Buscar tipo de propiedad'),
        'all_items' => __('Todas los tipos de propiedad'),
        'parent_item' => __('Tipo de propiedad padre'),
        'parent_item_colon' => __('Tipo de propiedad padre:'),
        'edit_item' => __('Editar tipo de propiedad'),
        'update_item' => __('Actualizar tipo de propiedad'),
        'add_new_item' => __('Añadir nuevo tipo de propiedad'),
        'new_item_name' => __('Nombre nuevo tipo de propiedad'),
        'menu_name' => __('Tipos de propiedad'),
    );

    // Now register the taxonomy
    register_taxonomy('propiedad', array('inmueble'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'propiedad'),
    ));
}

//hook into the init action and call create_book_taxonomies when it fires

add_action('init', 'create_subjects_hierarchical_taxonomy', 0);





require get_template_directory() . '/inc/scripts.php';
// require get_template_directory() .'/inc/styles.php';
require get_template_directory() . '/inc/ajax/filter-function.php';
// require get_template_directory() .'/inc/general-functions.php';



// Custom page walker.
require get_template_directory() . '/classes/class-tp-meta-box.php';

require get_template_directory() . '/inc/contact-function.php';

require get_template_directory() . '/template-parts/pagination.php';









