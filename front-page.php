<?php
/**
 * Template Name: Home Page
 * Description: Página principal con diseño personalizado usando Tailwind CSS
 */

get_header();
?>

<!-- Hero Section con fondo de imagen -->
<section class="relative min-h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=2070');">
    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black/50"></div>
    
    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 flex items-center" style="min-height: 100vh; padding-top: 80px;">
        <div class="max-w-2xl">
            <h1 class="text-white text-5xl md:text-6xl font-normal leading-tight mb-6">
                Lorem <span class="font-bold text-secondary">ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem has been the industry's
            </h1>
            <button class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-8 py-3 rounded-xl transition font-bold text-md">
                ACTION BT
            </button>
        </div>
    </div>
</section>

<!-- Sección Nuestras Soluciones -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="relative flex flex-col md:flex-row items-center justify-center md:justify-center gap-4">
            
            <!-- Contenedor unificado con fondo -->
            <div class="relative flex flex-col md:flex-row items-center bg-secondary rounded-3xl shadow-2xl p-6 md:p-0 max-w-6xl opacity-0 translate-y-8 transition-all duration-1000 ease-out animate-on-scroll" data-delay="200">
                
                <!-- Card de texto a la izquierda -->
                <div class="w-full md:w-auto md:max-w-md z-10 p-8 md:p-10">
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-primary mb-3 md:mb-4 leading-tight">
                        Nuestras Soluciones
                    </h3>
                    <p class="text-white text-lg md:text-lg leading-relaxed">
                        Encuentra el camino correcto con nosotros.
                    </p>
                </div>
                
                <!-- Círculo de 4 EJES usando la imagen -->
                <div class="flex justify-center md:justify-start z-20 md:-mr-12">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 transform hover:scale-105 transition-transform duration-500 opacity-0 scale-75 animate-on-scroll" data-delay="600">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/circulo.webp" 
                             alt="4 EJES - Nuestras Soluciones" 
                             class="w-full h-full object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>
            
            <!-- Contenedor de las cards de servicios -->
            <div class="w-full md:w-auto lg:max-w-md xl:max-w-lg mt-8 md:mt-0 md:ml-8 lg:ml-12 z-20">
                
                <!-- Lista de servicios -->
                <div class="space-y-3 md:space-y-4">
                
                <!-- Lista de servicios -->
                <div class="space-y-3 md:space-y-4 z-20">
                    <!-- Entrenamiento -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .708A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Entrenamiento</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Reclutamiento y selección -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157l.001.003Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Reclutamiento + Selección</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Capacitación -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="800">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path fillRule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75-2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clipRule="evenodd" />
                                    <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Capacitación</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Consultoría -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="1000">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path fillRule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97Z" clipRule="evenodd" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Consultoría</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Creatblue Originals con corte diagonal y onda -->
<section class="relative overflow-hidden" style="clip-path: polygon(0 8%, 100% 0%, 100% 100%, 0 100%);">
    <!-- Fondo con degradado morado oscuro -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#2a2d5a] via-[#1e2847] to-[#0f1229]"></div>
    
    <!-- Onda expansiva de degradado morado -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-radial from-purple-600/30 via-indigo-700/20 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-radial from-blue-500/20 via-purple-600/10 to-transparent rounded-full blur-2xl"></div>
    </div>
    
    <div class="container mx-auto px-6 py-24 md:py-32 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Lado izquierdo - Texto y logos -->
            <div class="space-y-8">
                <p class="text-blue-300 uppercase tracking-[0.2em] text-lg font-black mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">CREATBLUE ORIGINALS</p>
                 <!-- Logo WorkForce -->
                  <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/workforce_asset.png" 
                             alt="WORKFORCE" 
                             class="block mb-3 w-full max-w-[400px] h-auto">
                    </div>
                </div>
                <!-- Logo Creatmap -->
                <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/creatmap_asset.png" 
                             alt="CREATmap" 
                             class="w-full max-w-[400px] h-auto">
                    </div>
                </div>
            </div>
            
            <!-- Lado derecho - Imagen del trabajador -->
            <div class="relative h-[400px] md:h-[500px] lg:h-[600px] opacity-0 scale-75 animate-on-scroll" data-delay="800">
                <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-2xl">
                    <!-- Overlay sutil -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent z-10"></div>
                    
                    <!-- Imagen -->
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070" 
                         alt="Trabajador profesional con tablet" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Efecto de resplandor -->
                <div class="absolute -inset-4 bg-gradient-to-r from-purple-600/20 to-blue-600/20 rounded-2xl blur-2xl -z-10"></div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección Diferenciadores -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-6">
        <!-- Título -->
        <div class="mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <p class="text-secondary uppercase tracking-wide text-2xl font-black mb-3">DIFERENCIADOR CREATBLUE</p>
            <p class="text-gray-700 text-lg max-w-3xl leading-relaxed">
                En Creatblue México nos caracterizamos por incrementar la productividad en todas las zonas que trabajamos, por medio de la capacitación y entrenamiento de los trabajadores y gerentes de los negocios.
            </p>
        </div>
        
        <!-- Cards mejoradas -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Card 1 - Mejoramos la productividad -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-chart-line text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                        Mejoramos la productividad
                    </h3>
                </div>
            </div>
            
            <!-- Card 2 - Disminuimos la rotación -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-users text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                        Disminuimos la rotación de personal
                    </h3>
                </div>
            </div>
            
            <!-- Card 3 - Optimizamos costos -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-dollar-sign text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                        Optimizamos tus costos operativos
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner CTA Newsletter - Más redondeado -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="relative overflow-hidden bg-gradient-to-r from-[#2d3e7a] via-[#3d4f8f] to-[#4a5fa3] rounded-3xl shadow-2xl">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 p-10 md:p-12 relative z-10">
                <!-- Contenido de texto -->
                <div class="text-white">
                    <p class="text-xs uppercase tracking-widest mb-3 text-blue-200 font-semibold">BLOG | NEWSLETTER</p>
                    <h3 class="text-4xl md:text-5xl font-bold mb-3">
                        Camino<span class="italic font-light">zum</span> talent
                    </h3>
                    <p class="text-blue-100 text-lg">
                        No te pierdas de la mejor información dentro del sector
                    </p>
                </div>
                
                <!-- Botón CTA -->
                <div class="flex-shrink-0">
                    <button class="bg-blue-400 hover:bg-blue-300 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                        ACTION BT
                    </button>
                </div>
            </div>
            
            <!-- Imagen de fondo a la derecha -->
            <div class="absolute right-0 top-0 bottom-0 w-1/3 hidden lg:block opacity-30">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070" 
                     alt="Worker background" 
                     class="w-full h-full object-cover">
            </div>
            
            <!-- Patrón decorativo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-64 h-64 bg-blue-300 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-purple-300 rounded-full blur-3xl"></div>
            </div>
        </div>
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
?>
