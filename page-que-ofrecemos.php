<?php
/**
 * Template Name: Qué Ofrecemos
 * Description: Página de servicios y soluciones de Creatblue
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
                    <span class="bg-[#849dfa] text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                        CB RECLUTAMIENTO + SELECCIÓN
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Estrategias efectivas de reclutamiento y selección de personal para 
                    <span class="text-[#849dfa]">IMPULSAR</span> tu capital humano
                </h1>
                
                <!-- CTA Button -->
                <button class="bg-blue-400 hover:bg-blue-300 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    ACCIÓN BT
                </button>
            </div>
            
            <!-- Columna derecha - Grid de imágenes desordenado -->
            <div class="relative h-[500px] lg:h-[600px] hidden lg:block">
                <!-- Imagen 1 - Superior izquierda -->
                <div class="absolute top-0 left-0 w-48 h-48 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-10 opacity-0 scale-75 animate-on-scroll" data-delay="300">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=400" 
                         alt="Trabajador 1" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 2 - Superior derecha -->
                <div class="absolute top-0 right-0 w-56 h-40 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll" data-delay="500">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=400" 
                         alt="Trabajador 2" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 3 - Centro izquierda (más grande y destacada) -->
                <div class="absolute top-32 left-12 w-52 h-56 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-30 opacity-0 scale-75 animate-on-scroll" data-delay="700">
                    <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?q=80&w=400" 
                         alt="Trabajador 3" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 4 - Inferior derecha -->
                <div class="absolute bottom-0 right-8 w-48 h-52 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll" data-delay="900">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=400" 
                         alt="Trabajador 4" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Elementos decorativos (cuadrados morados como en la imagen) -->
                <div class="absolute top-24 right-32 w-20 h-20 bg-[#849dfa] rounded-lg opacity-80 z-0"></div>
                <div class="absolute bottom-32 left-32 w-16 h-16 bg-[#849dfa] rounded-lg opacity-60 z-0"></div>
            </div>
            
            <!-- Grid móvil - Mostrar solo en pantallas pequeñas -->
            <div class="grid grid-cols-2 gap-4 lg:hidden">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=400" 
                         alt="Trabajador 1" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=400" 
                         alt="Trabajador 2" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?q=80&w=400" 
                         alt="Trabajador 3" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=400" 
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
                Gracias a nuestra experiencia en la gestión de capital humano, conocemos los desafíos clave que enfrentan las empresas y el impacto en su Core Business.
            </h2>
        </div>
        
        <!-- Grid de 3 columnas con iconos -->
        <div class="grid md:grid-cols-3 gap-8 mb-20">
            <!-- Card 1: Menor tiempo -->
            <div class="text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-[#849dfa] rounded-full mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Menor tiempo de espera en respuesta.</h3>
                <p class="text-gray-600 leading-relaxed">
                    Optimizamos procesos para reducir tiempos de espera significativamente.
                </p>
            </div>
            
            <!-- Card 2: Reclutamiento especializado -->
            <div class="text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-[#849dfa] rounded-full mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Reclutamiento especializado por sector.</h3>
                <p class="text-gray-600 leading-relaxed">
                    Expertos en identificar el talento adecuado para cada industria.
                </p>
            </div>
            
            <!-- Card 3: Procesos asistidos -->
            <div class="text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-[#849dfa] rounded-full mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Procesos asistidos con Tecnología de IA</h3>
                <p class="text-gray-600 leading-relaxed">
                    Implementamos IA para hacer más eficientes nuestros procesos de selección.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sección ¿Te ha pasado? -->
<section class="py-20 bg-gradient-to-br from-[#849dfa] to-[#6b7fd8]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                ¿Te ha pasado?
            </h2>
        </div>
        
        <!-- Grid de 4 cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Paros en línea -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Paros en línea de producción
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    Una hora de paro en línea puede costar entre <span class="font-bold">$10,000 y $50,000 USD.</span> Dependiendo de la empresa.
                </p>
            </div>
            
            <!-- Card 2: Daños en instalaciones -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Daños en las instalaciones
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    El <span class="font-bold">60%</span> de los incidentes industriales se deben a malas prácticas operativas.
                </p>
            </div>
            
            <!-- Card 3: Accidentes e incidentes -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Accidentes e incidentes en el área operativa
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    El <span class="font-bold">38%</span> de los accidentes por mantenimiento implican daños a infraestructura (fugas, incas, paredes/ o barreras de seguridad) enfermedos.
                </p>
            </div>
            
            <!-- Card 4: Scrap de materiales -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Scrap de materiales
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    El scrap puede representar entre el <span class="font-bold">2% y 10%</span> de los ingresos totales por ventas de línea de producción.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sección WORKFORCE ready to go! -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#1e2847] via-[#2a2d5a] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-radial from-purple-600/30 via-indigo-700/20 to-transparent rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Header -->
        <div class="mb-16">
            <p class="text-[#849dfa] uppercase tracking-[0.2em] text-xs font-bold mb-4">
                Reclutamiento + Entrenamiento
            </p>
            <h2 class="text-white mb-6">
                <span class="block text-4xl md:text-5xl font-bold uppercase tracking-wide mb-2">WORKFORCE</span>
                <span class="block text-5xl md:text-6xl lg:text-7xl font-light italic">ready to go!</span>
            </h2>
            <p class="text-white text-lg max-w-2xl">
                de personal sin experiencia.
            </p>
        </div>
        
        <!-- Grid de imágenes tipo collage: 1 grande a la izquierda, 2 pequeñas apiladas a la derecha -->
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            
            <!-- Imagen grande izquierda: Reduce la curva de aprendizaje -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group md:row-span-2 h-96 md:h-[500px]">
                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=800" 
                     alt="Reduce la curva de aprendizaje" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="text-white text-2xl md:text-3xl font-bold leading-tight">
                        Reduce la curva de aprendizaje.
                    </h3>
                </div>
            </div>
            
            <!-- Imagen pequeña superior derecha: Disminuye la accidentabilidad -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-60 md:h-60">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=600" 
                     alt="Disminuye la accidentabilidad" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-white text-xl md:text-2xl font-bold leading-tight">
                        Disminuye la accidentabilidad y pérdidas de material.
                    </h3>
                </div>
            </div>
            
            <!-- Imagen pequeña inferior derecha: Aumenta la productividad -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-60 md:h-56">
                <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?q=80&w=600" 
                     alt="Aumenta la productividad" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-white text-xl md:text-2xl font-bold leading-tight">
                        Aumenta la productividad desde el primer día.
                    </h3>
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
        <button class="bg-blue-400 hover:bg-blue-300 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
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
            particle.style.transform = `translateY(${yPos}px)`;
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
    transform: translateY(0) translateX(0) scale(1) !important;
}

.particle-float {
    transition: transform 0.1s ease-out;
    will-change: transform;
}
</style>

<?php
get_footer();
