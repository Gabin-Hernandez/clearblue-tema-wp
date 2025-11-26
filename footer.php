<!-- Footer -->
<footer class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
            <!-- Columna 1 -->
            <div>
                <h4 class="font-bold text-gray-800 mb-4">Acerca de nosotros</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/quienes-somos')); ?>" class="text-gray-600 hover:text-blue-600 transition">Quiénes somos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-gray-600 hover:text-blue-600 transition">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-gray-600 hover:text-blue-600 transition">Contacto</a></li>
                </ul>
            </div>
            
            <!-- Columna 2 -->
            <div>
                <h4 class="font-bold text-gray-800 mb-4">Creatblue HR</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'space-y-2',
                    'fallback_cb' => function() {
                        ?>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Entrenamiento</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Reclutamiento +</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Selección</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Consultoría</a></li>
                        </ul>
                        <?php
                    },
                    'link_before' => '<span class="text-gray-600 hover:text-blue-600 transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Columna 3 -->
            <div>
                <h4 class="font-bold text-gray-800 mb-4">Ventas</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:info@creatblue.com" class="text-gray-600 hover:text-blue-600 transition">
                            info@creatblue.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:0001119999" class="text-gray-600 hover:text-blue-600 transition">
                            000 111 9999
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Columna 4 -->
            <div>
                <h4 class="font-bold text-gray-800 mb-4">Candidatos</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Bolsa de trabajo</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Redes sociales y logo -->
        <div class="border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-8" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-gray-800 font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- LinkedIn -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-600 transition" aria-label="LinkedIn">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                
                <!-- Facebook -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-600 transition" aria-label="Facebook">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                </a>
                
                <!-- YouTube -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-600 transition" aria-label="YouTube">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-8 text-gray-500 text-sm">
            <p>Creatblue México</p>
            <p>&copy; Avenida JINT #300 Parque industrial JINT. Puebla, Pue.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
