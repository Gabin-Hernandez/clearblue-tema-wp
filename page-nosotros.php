<?php
/**
 * Template Name: Acerca de nosotros
 * Description: Página de Acerca de nosotros
 */

get_header();
?>


<!-- Nosotros section -->
<!-- Sección Hero - Título principal -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                CREAT<span class="font-normal">alento</span> idóneo en el menor tiempo posible.
            </h1>
            <p class="text-lg text-primary opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                Promesa Creatblue que se cumple.
            </p>
        </div>
    </div>
</section>

<!-- Sección: Quiénes Somos -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Texto -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                    QUIÉNES SOMOS
                </h2>
                
                <div class="space-y-4 text-primary">
                    <p class="text-lg">
                        <span class="font-bold">Creatblue México</span> una nueva división de Grupo Schnellecke.
                    </p>
                    
                    <div>
                        <p class="font-bold mb-2">¿Nuestra misión?</p>
                        <p class="leading-relaxed">
                            Crear talento humano altamente calificado con las habilidades y actitudes correctas para despegar el potencial de tu empresa.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Columna derecha - Contenedor de imagen -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <div class="w-full h-[400px] bg-gradient-to-br from-primary to-[#1a1d4a] rounded-2xl shadow-2xl">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="text-white/20 text-xl">Imagen placeholder</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección: La Importancia de Creatblue -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Contenedor de imagen -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="400">
                <div class="w-full h-[400px] bg-gradient-to-br from-primary to-[#1a1d4a] rounded-2xl shadow-2xl">
                    <!-- Placeholder para imagen - cambiar después -->
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="text-white/20 text-xl">Imagen placeholder</span>
                    </div>
                </div>
            </div>
            
            <!-- Columna derecha - Texto -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                    LA IMPORTANCIA DE CREATBLUE PARA LAS EMPRESAS
                </h2>
                
                <div class="space-y-4 text-primary">
                    <p class="leading-relaxed">
                        En el mercado laboral existe una alta demanda de personal calificado que crece día con día, sin que esta necesidad pueda ser atendida eficientemente,
                    </p>
                    <p class="text-right italic">
                        hasta ahora...
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
