<?php
// Este el la conexion a el archivo 'Model_actores'
require_once 'Model/model_actores.php';

// Para la activar la funcion 'obtenerActores'
$resultado = obtenerActores($conexion);

// Para activar la funcion 'obtenerActoresPorNombres'
if (isset($_GET['Buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $resultado = obtenerActoresPorNombre($conexion, $nombre);
}

// Este es el nombre de la pagina
$pagina = "Actores";



#incluir la vista
require_once 'Vistas/actores.html.php';