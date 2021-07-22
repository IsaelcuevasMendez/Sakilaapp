<?php
require_once 'Conexion.php';

function obtenerLenguaje($conexion){

    $query = "SELECT * FROM language";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function obtenerLenguajePorNombre($conexion, $nombre){

    $query = "SELECT * FROM language WHERE name LIKE '%$nombre%'";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}