<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Agregar Tailwind CSS al head
add_action( 'wp_head', 'add_tailwind_css' );
function add_tailwind_css() {
    ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer utilities {
            .bg-gradient-radial {
                background-image: radial-gradient(var(--tw-gradient-stops));
            }
        }
    </style>
    <?php
}

// Registrar menús de navegación
add_action( 'after_setup_theme', 'creatblue_setup' );
function creatblue_setup() {
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'creatblue' ),
        'footer' => __( 'Menú Footer', 'creatblue' ),
    ) );
    
    // Soporte para imágenes destacadas
    add_theme_support( 'post-thumbnails' );
    
    // Soporte para título del sitio
    add_theme_support( 'title-tag' );
    
    // Soporte para logo personalizado
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
?>