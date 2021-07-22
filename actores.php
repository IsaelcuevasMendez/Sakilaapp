<?php

require_once 'Model/model_actores.php';

$pagina = "Actores";

$resultado = obtenerActores($conexion);


# cuando el usuario haga click en el boton buscar
if (isset($_GET['buscar'])) {

    $nombre = $_GET['nombre'] ?? "";

    $resultado = obtenerActoresPorNombre($conexion, $nombre);
}

#incluir la vista
require_once 'Vistas/actores.html.php';