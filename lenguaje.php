<?php
// Este el la conexion a el archivo 'Model_actores'
require_once 'Model/model_lenguaje.php';

// Para la activar la funcion 'obtenerLenguaje'
$resultado = obtenerLenguaje($conexion);

// Para activar la funcion 'obtenerActoresPorNombres'
if (isset($_GET['Buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $resultado = obtenerLenguajePorNombre($conexion, $nombre);
}
// Este es el nombre de la pagina
$pagina = "Idioma";

$nombre = $_GET['nombre'] ?? "";

#incluir la vista
require_once 'Vistas/lenguaje.html.php';