<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header/Nav sticky con efecto glassmorphism -->
<header class="sticky top-0 left-0 right-0 z-50 backdrop-blur-md border-b border-white/10 shadow-lg bg-primary/30" id="main-header">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_light.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-16" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-white font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Menú Central -->
            <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '%3$s',
                    'fallback_cb' => function() {
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white hover:text-blue-300 transition">Quiénes somos</a>
                        <a href="<?php echo esc_url(home_url('/que-ofrecemos')); ?>" class="text-white hover:text-blue-300 transition">Qué ofrecemos</a>
                        <a href="#" class="text-white hover:text-blue-300 transition">Camino zum talent</a>
                        <a href="#" class="text-white hover:text-blue-300 transition">Contacto</a>
                        <a href="#" class="text-white hover:text-blue-300 transition">Bolsa de trabajo</a>
                        <?php
                    },
                    'link_before' => '<span class="text-white hover:text-blue-300 transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Botón contacto derecha --> 
            <div class="flex items-center space-x-4">
                <!--<a href="#contacto" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition font-medium">
                <i class="fa-brands fa-whatsapp"></i> Chat ahora
                </a>-->
                <!-- Menú móvil toggle  --> 
                <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div> 
        </div>
        
        <!-- Menú móvil -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'space-y-3',
                'fallback_cb' => function() {
                    ?>
                    <div class="space-y-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-white hover:text-blue-300 transition py-2">Quiénes somos</a>
                        <a href="<?php echo esc_url(home_url('/que-ofrecemos')); ?>" class="block text-white hover:text-blue-300 transition py-2">Qué ofrecemos</a>
                        <a href="#" class="block text-white hover:text-blue-300 transition py-2">Camino zum talent</a>
                        <a href="#" class="block text-white hover:text-blue-300 transition py-2">Contáctanos</a>
                        <a href="#" class="block text-white hover:text-blue-300 transition py-2">Bolsa de trabajo</a>
                    </div>
                    <?php
                },
                'link_before' => '<span class="block text-white hover:text-blue-300 transition py-2">',
                'link_after' => '</span>',
            ));
            ?>
        </div>
    </nav>
</header>

<script>
// Toggle menú móvil
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }
});
</script>
