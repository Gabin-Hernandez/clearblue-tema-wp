<?php
/**
 * Template Name: Originals
 * Description: Página de servicios de originals
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-gray-50 to-gray-100 pt-32 pb-20 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Columna izquierda - Contenido de texto -->
            <div class="max-w-xl">
                <!-- Badge -->
                <div class="inline-block mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="100">
                    <span class="bg-secondary text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                    Creatblue ORIGINALS
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Soluciones exclusivas que  
                    <span class="text-secondary font-black">DIFERENCIAN</span> a tu empresa
                </h1>
                
                <!-- CTA Button -->
                <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    ACCIÓN BT
                </button>
            </div>
            
            <!-- Columna derecha - Grid de imágenes desordenado -->
            <div class="relative h-[500px] lg:h-[600px] hidden lg:block">
                <!-- Imagen 1 - Superior izquierda -->
                <div class="absolute top-0 left-0 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-10 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="300" data-speed="0.3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima1.jpg" 
                         alt="Trabajador 1" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 2 - Superior derecha -->
                <div class="absolute top-0 right-0 w-64 h-64 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="500" data-speed="0.5">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima2.jpg" 
                         alt="Trabajador 2" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 3 - Centro izquierda (más grande y destacada) -->
                <div class="absolute top-60 left-24 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-30 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="700" data-speed="0.2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima3.jpg" 
                         alt="Trabajador 3" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 4 - Inferior derecha -->
                <div class="absolute bottom-0 right-8 w-48 h-52 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="900" data-speed="0.4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima4.jpg" 
                         alt="Trabajador 4" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Elementos decorativos (cuadrados morados como en la imagen) -->
                <div class="absolute top-64 right-32 w-20 h-20 bg-secondary rounded-lg opacity-80 z-0 particle-float" data-speed="0.6"></div>
                <div class="absolute bottom-32 left-4 w-16 h-16 bg-primary rounded-lg opacity-60 z-0 particle-float" data-speed="0.7"></div>
            </div>
            
            <!-- Grid móvil - Mostrar solo en pantallas pequeñas -->
            <div class="grid grid-cols-2 gap-4 lg:hidden">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima1.jpg" 
                         alt="Trabajador 1" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima2.jpg" 
                         alt="Trabajador 2" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima3.jpg" 
                         alt="Trabajador 3" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima4.jpg" 
                         alt="Trabajador 4" 
                         class="w-full h-48 object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección de Estadísticas y Gestión -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Creamos talento desarrollando soluciones de marca propia para aportar un valor único y adpatado a las necesidades de cada empresa.
            </h2>
        </div>
    </div>
</section>

<!-- Sección Decisiones respaldadas por estrategia -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Decisiones respaldadas por estrategia
            </h2>
        </div>
    </div>
</section>

<!-- Sección WORKFORCE ready to go! -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>

        <!-- Grid de 2 banners horizontales Workforce y CreatPlay  -->
        <div class="container mx-auto px-6 relative z-10">
            <!-- Grid de 2 columnas -->
            <div class="grid lg:grid-cols-2 gap-8">
                
                <!-- Banner 1: WORKFORCE - Reclutamiento + Entrenamiento -->
                <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <!-- Imagen arriba -->
                    <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/workforce_asset.png" 
                             alt="WORKFORCE ready to go" 
                             class="w-full max-w-[300px] h-auto">
                    </div>
                    
                    <!-- Contenido abajo -->
                    <div class="p-8 md:p-10">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4 leading-tight">
                            Reclutamiento + Entrenamiento
                        </h3>
                        <p class="text-white/90 text-base md:text-lg mb-6">
                            Reclutamiento y entrenamiento de personal sin experiencia.
                        </p>
                        <button class="bg-secondary hover:bg-secondary/80 text-white px-6 py-3 rounded-xl transition-all duration-300 font-bold text-sm md:text-md shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-player-play">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                            </svg>
                            <span>Ver cómo funciona</span>
                        </button>
                    </div>
                </div>
                
                <!-- Banner 2: CREATPLAY - Desarrollo de VIDEO GAMING -->
                <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <!-- Imagen arriba -->
                    <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/creatplay_asset.png" 
                             alt="CREATPLAY" 
                             class="w-full max-w-[300px] h-auto">
                    </div>
                    
                    <!-- Contenido abajo -->
                    <div class="p-8 md:p-10">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4 leading-tight">
                            Desarrollo de VIDEO GAMING
                        </h3>
                        <p class="text-white/90 text-base md:text-lg mb-6">
                            Desarrollo para capacitaciones empresariales.
                        </p>
                        <button class="bg-secondary hover:bg-secondary/80 text-white px-6 py-3 rounded-xl transition-all duration-300 font-bold text-sm md:text-md shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-player-play">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                            </svg>
                            <span>Ver cómo funciona</span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<!-- Sección SOLUCIONES DE RECLUTAMIENTO + SELECCIÓN -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            SOLUCIONES DE RECLUTAMIENTO + SELECCIÓN
            </h2>
        </div>
        
        <!-- Grid de 2 columnas -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-20">
            
            <!-- Elemento 1: Headhunting -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Headhunting
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de headhunting diferenciada para creatblue
                    </p>
                </div>
            </div>
            
            <!-- Elemento 2: MRP (Massive Recruitment Process) -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    MRP (Massive Recruitment Process)
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción del reclutamiento masivo diferenciado para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 3: Reclutamiento Puro -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Reclutamiento Puro
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de reclutamiento puro diferenciada para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 4: Evaluación de Perfiles -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Evaluación de Perfiles
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de evaluación de perfiles diferenciada para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 5: Headhunting -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Headhunting
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de headhunting diferenciada para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 6: MRP (Massive Recruitment Process) -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    MRP (Massive Recruitment Process)
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción del reclutamiento masivo diferenciado para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 7: Reclutamiento Puro -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Reclutamiento Puro
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de reclutamiento puro diferenciada para creatblue
                    </p>
                </div>
            </div>

            <!-- Elemento 8: Evaluación de Perfiles -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400"></div>
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Evaluación de Perfiles
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Descripción de evaluación de perfiles diferenciada para creatblue
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección CTA Final -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            ¿Listo para transformar tu capital humano?
        </h2>
        <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
            Contáctanos hoy y descubre cómo podemos ayudarte a optimizar tus procesos de reclutamiento y capacitación.
        </p>
        <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            Contáctanos ahora
        </button>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para las animaciones de scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '-50px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = parseInt(element.dataset.delay) || 0;
                
                setTimeout(() => {
                    element.classList.add('animate-in');
                    element.classList.remove('opacity-0', 'translate-y-8', 'translate-x-8', 'scale-75');
                }, delay);
                
                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase animate-on-scroll
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach((element) => {
        observer.observe(element);
    });

    // Efecto parallax para las partículas flotantes
    const particles = document.querySelectorAll('.particle-float');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        particles.forEach(particle => {
            const speed = parseFloat(particle.dataset.speed) || 0.5;
            const yPos = -(scrollY * speed);
            
            // Check if element has animate-on-scroll class and is animated in
            if (particle.classList.contains('animate-on-scroll') && particle.classList.contains('animate-in')) {
                // Preserve the existing transform from animation and add parallax
                particle.style.transform = `translateY(${yPos}px)`;
            } else if (!particle.classList.contains('animate-on-scroll')) {
                // For elements without scroll animation, just apply parallax
                particle.style.transform = `translateY(${yPos}px)`;
            }
        });
    });
});
</script>

<style>
.animate-on-scroll {
    transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
}

.animate-on-scroll.animate-in {
    opacity: 1 !important;
    /* No aplicamos transform aquí para evitar conflictos con parallax */
}

.animate-on-scroll.animate-in:not(.particle-float) {
    transform: translateY(0) translateX(0) scale(1) !important;
}

.particle-float {
    transition: transform 0.1s ease-out;
    will-change: transform;
}
</style>

<?php
get_footer();
