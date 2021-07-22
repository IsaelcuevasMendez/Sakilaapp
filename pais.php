<?php
// Este el la conexion a el archivo 'Model_actores'
require_once 'Model/model_pais.php';

// Para la activar la funcion 'obtenerPais'
$resultado = obtenerPais($conexion);

// Para activar la funcion 'obtenerActoresPorNombres'
if (isset($_GET['Buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $resultado = obtenerPaisPorNombre($conexion, $nombre);
}

// Este es el nombre de la pagina
$pagina = "Paises";

$nombre = $_GET['nombre'] ?? "";

#incluir la vista
require_once 'Vistas/pais.html.php';