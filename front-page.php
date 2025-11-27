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
            <button class="bg-secondary hover:bg-secondary-dark text-primary px-8 py-3 rounded-xl transition font-medium text-lg">
                ACTION BT
            </button>
        </div>
    </div>
</section>

<!-- Sección Nuestras Soluciones -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="relative flex flex-col md:flex-row items-center justify-center md:justify-start">
            
            <!-- Contenedor unificado con fondo -->
            <div class="relative flex flex-col md:flex-row items-center bg-[#849dfa] rounded-3xl shadow-2xl p-6 md:p-0 max-w-6xl">
                
                <!-- Card de texto a la izquierda -->
                <div class="w-full md:w-auto md:max-w-md z-10 p-8 md:p-10">
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-black mb-3 md:mb-4 leading-tight">
                        Nuestras Soluciones
                    </h3>
                    <p class="text-white text-base md:text-lg leading-relaxed">
                        Encuentra el camino correcto con nosotros.
                    </p>
                </div>
                
                <!-- Círculo de 4 EJES usando la imagen -->
                <div class="flex justify-center md:justify-start z-20 md:-mr-12">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 transform hover:scale-105 transition-transform duration-500">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/circulo.png" 
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
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-4 md:p-5 flex items-center justify-between cursor-pointer hover:bg-[#1e3a8a] hover:border-[#1e3a8a] transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-[#1e3a8a] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-base md:text-lg">Entrenamiento</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    
                    <!-- Reclutamiento y selección -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-4 md:p-5 flex items-center justify-between cursor-pointer hover:bg-[#1e3a8a] hover:border-[#1e3a8a] transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-[#1e3a8a] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-base md:text-lg">Reclutamiento + Selección</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    
                    <!-- Capacitación -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-4 md:p-5 flex items-center justify-between cursor-pointer hover:bg-[#1e3a8a] hover:border-[#1e3a8a] transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-[#1e3a8a] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-base md:text-lg">Capacitación</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    
                    <!-- Consultoría -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-4 md:p-5 flex items-center justify-between cursor-pointer hover:bg-[#1e3a8a] hover:border-[#1e3a8a] transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-[#1e3a8a] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-base md:text-lg">Consultoría</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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
                <div>
                    <p class="text-blue-300 uppercase tracking-[0.2em] text-xs font-bold mb-6">CREATBLUE ORIGINALS</p>
                    <h2 class="text-white leading-tight mb-8">
                        <span class="block text-3xl md:text-4xl font-bold mb-3 uppercase tracking-wide">WORKFORCE</span>
                        <span class="block text-4xl md:text-5xl lg:text-6xl font-light italic">ready to go!</span>
                    </h2>
                </div>
                
                <!-- Logo Creatmap -->
                <div class="space-y-6">
                    <div class="inline-block">
                        <div class="text-3xl md:text-4xl font-bold tracking-wide text-white">
                            CREAT<span class="italic font-light">map</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lado derecho - Imagen del trabajador -->
            <div class="relative h-[400px] md:h-[500px] lg:h-[600px]">
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
    
    <!-- Efecto de partículas/puntos decorativos -->
    <div class="absolute top-20 right-20 w-2 h-2 bg-blue-400 rounded-full opacity-50"></div>
    <div class="absolute top-40 right-40 w-3 h-3 bg-purple-400 rounded-full opacity-40"></div>
    <div class="absolute bottom-32 left-32 w-2 h-2 bg-indigo-400 rounded-full opacity-50"></div>
    <div class="absolute bottom-20 left-20 w-3 h-3 bg-blue-400 rounded-full opacity-30"></div>
</section>

<!-- Sección Diferenciadores -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-6">
        <!-- Título -->
        <div class="mb-16">
            <p class="text-blue-600 uppercase tracking-widest text-xs font-bold mb-3">DIFERENCIADOR CREATBLUE</p>
            <p class="text-gray-700 text-base max-w-3xl leading-relaxed">
                En Creatblue México nos caracterizamos por incrementar la productividad en todas las zonas que trabajamos, por medio de la capacitación y entrenamiento de los trabajadores y gerentes de los negocios.
            </p>
        </div>
        
        <!-- Cards mejoradas -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Card 1 - Mejoramos la productividad -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                    Mejoramos la productividad
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Incrementamos la eficiencia operativa mediante capacitación especializada y procesos optimizados.
                </p>
            </div>
            
            <!-- Card 2 - Disminuimos la rotación -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                    Disminuimos la rotación de personal
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Reducimos significativamente la rotación mediante estrategias de retención y desarrollo del talento.
                </p>
            </div>
            
            <!-- Card 3 - Optimizamos costos -->
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">
                    Optimizamos tus costos operativos
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Maximizamos el retorno de inversión optimizando recursos y procesos operacionales.
                </p>
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
                    <p class="text-blue-100 text-base">
                        No te pierdas de la mejor información dentro del sector
                    </p>
                </div>
                
                <!-- Botón CTA -->
                <div class="flex-shrink-0">
                    <button class="bg-blue-400 hover:bg-blue-300 text-white px-10 py-4 rounded-xl transition-all duration-300 font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
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

<?php
get_footer();
?>
