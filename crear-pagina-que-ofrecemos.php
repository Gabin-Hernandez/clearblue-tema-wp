<?php
/**
 * Archivo para crear automáticamente la página "Qué Ofrecemos"
 * Ejecutar este archivo una vez visitándolo desde el navegador: tu-sitio.com/wp-content/themes/tema-hijo/crear-pagina-que-ofrecemos.php
 * Después de ejecutar, puedes eliminar este archivo.
 */

// Cargar WordPress
require_once('../../../wp-load.php');

// Verificar si ya existe la página
$page_check = get_page_by_path('que-ofrecemos');

if (!$page_check) {
    // Crear la página
    $page_data = array(
        'post_title'    => 'Qué Ofrecemos',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'que-ofrecemos',
        'page_template' => 'page-que-ofrecemos.php'
    );

    // Insertar la página
    $page_id = wp_insert_post($page_data);

    if ($page_id) {
        echo "✅ Página 'Qué Ofrecemos' creada exitosamente!<br>";
        echo "ID de la página: " . $page_id . "<br>";
        echo "URL: <a href='" . get_permalink($page_id) . "'>" . get_permalink($page_id) . "</a><br>";
        echo "<br>Puedes eliminar este archivo ahora.";
    } else {
        echo "❌ Error al crear la página.";
    }
} else {
    echo "ℹ️ La página 'Qué Ofrecemos' ya existe.<br>";
    echo "ID: " . $page_check->ID . "<br>";
    echo "URL: <a href='" . get_permalink($page_check->ID) . "'>" . get_permalink($page_check->ID) . "</a>";
}
?>
