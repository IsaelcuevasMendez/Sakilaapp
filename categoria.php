<?php
// Este el la conexion a el archivo 'Model_actores'
require_once 'Model/model_categoria.php';

// Para la activar la funcion 'obtenerCategoria'
$resultado = obtenerCategoria($conexion);

// Para activar la funcion 'obtenerActoresPorNombres'
if (isset($_GET['Buscar'])){
    $nombre = $_GET['nombre'] ?? "";
    $resultado = obtenerCategoriaPorNombre($conexion, $nombre);
}
// Este es el nombre de la pagina
$pagina = "Categoria";

$nombre = $_GET['nombre'] ?? "";

#incluir la vista
require_once 'Vistas/categoria.html.php';