# Tema Hijo Creatblue - WordPress + Tailwind CSS

Tema hijo personalizado para WordPress con diseño moderno usando Tailwind CSS.

## 📁 Estructura de Archivos

```
tema-hijos/
├── assets/                 # Recursos (imágenes, logos, etc.)
│   └── logo.png           # Logo del sitio (coloca tu logo aquí)
├── header.php             # Header reutilizable (navbar)
├── footer.php             # Footer reutilizable
├── front-page.php         # Página principal (Home)
├── functions.php          # Funciones del tema
└── style.css              # Estilos del tema hijo
```

## 🎨 Componentes Principales

### Header (`header.php`)
- **Navbar transparente** con posición absoluta
- Logo dinámico (soporta Custom Logo de WordPress)
- Menú de navegación (ubicación: `primary`)
- Menú móvil responsive con toggle
- Botón CTA personalizable
- Clases Tailwind para estilizado

### Footer (`footer.php`)
- **4 columnas** de enlaces organizados
- Menú de footer (ubicación: `footer`)
- Información de contacto
- **Redes sociales** (LinkedIn, Facebook, YouTube)
- Logo en footer
- Copyright dinámico

### Front Page (`front-page.php`)
Secciones incluidas:
1. **Hero Section** - Full screen con imagen de fondo
2. **Nuestras Soluciones** - Grid con gráfico circular y servicios
3. **Creatblue Originals** - Sección oscura con productos
4. **Diferenciadores** - Cards con beneficios
5. **Banner CTA** - Newsletter y llamada a la acción

## ⚙️ Configuración Inicial

### 1. Activar el Tema
1. Ve a **Apariencia → Temas** en WordPress Admin
2. Activa "child-theme"

### 2. Configurar Menús
1. Ve a **Apariencia → Menús**
2. Crea un menú llamado "Menú Principal"
3. Asigna a la ubicación **"Menú Principal"**
4. Crea otro menú para **"Menú Footer"**

### 3. Subir Logo
**Opción A - WordPress Admin:**
1. Ve a **Apariencia → Personalizar → Identidad del sitio**
2. Sube tu logo en "Logo del sitio"

**Opción B - Manual:**
1. Coloca tu logo en `/assets/logo.png`

### 4. Configurar Front Page
1. Ve a **Ajustes → Lectura**
2. Selecciona "Una página estática"
3. Elige "Front Page" como página principal

## 🎯 Características

✅ **Responsive** - Diseño adaptable a todos los dispositivos
✅ **Tailwind CSS** - Utilidades CSS modernas
✅ **SEO Friendly** - HTML semántico
✅ **Menús dinámicos** - Integración con WordPress
✅ **Custom Logo** - Soporte para logo personalizado
✅ **Reutilizable** - Header y footer en componentes separados

## 🛠️ Personalización

### Cambiar Colores de Marca
Los colores principales están en Tailwind CSS. Busca y reemplaza:
- `bg-[#1e3a8a]` - Azul principal
- `bg-blue-600` - Botones
- Ajusta según tu paleta de colores

### Cambiar Imágenes
Reemplaza las URLs de Unsplash en `front-page.php`:
```php
// Hero
style="background-image: url('TU_IMAGEN_AQUI');"

// Creatblue Originals
<img src="TU_IMAGEN_AQUI" alt="..." />
```

### Agregar Más Páginas
Para crear nuevas páginas que usen el header y footer:
```php
<?php get_header(); ?>

<!-- Tu contenido aquí -->

<?php get_footer(); ?>
```

## 📱 Menú Móvil

El menú móvil se activa automáticamente en pantallas pequeñas con JavaScript incluido en `header.php`.

## 🚀 Próximos Pasos Recomendados

1. **Optimizar Tailwind CSS para producción**
   - Instalar Tailwind via npm
   - Configurar purge para reducir tamaño

2. **Agregar más plantillas**
   - `page.php` - Página genérica
   - `single.php` - Post individual
   - `archive.php` - Archivo de posts

3. **Optimizar imágenes**
   - Comprimir imágenes antes de subir
   - Usar WebP para mejor performance

4. **Añadir Custom Fields**
   - ACF para contenido dinámico
   - Meta boxes personalizados

## 📞 Soporte

Para más información sobre desarrollo de temas en WordPress:
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Tailwind CSS Docs](https://tailwindcss.com/docs)

---

**Desarrollado con ❤️ usando WordPress + Tailwind CSS**
