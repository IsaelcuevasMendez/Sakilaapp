<?php

require_once "conexion.php";

function obtenerPais($conexion) {
    $query = "SELECT * FROM country";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function obtenerPaisPorNombre($conexion, $nombre){

    $query = "SELECT * FROM country WHERE name LIKE '%$nombre%'";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}