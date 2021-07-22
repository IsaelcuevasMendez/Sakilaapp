<?php
require_once 'Conexion.php';

function obtenerCategoria($conexion){

    $query = "SELECT * FROM category";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}

function obtenerCategoriaPorNombre($conexion, $nombre){

    $query = "SELECT * FROM category WHERE name LIKE '%$nombre%'";

    $resultado = mysqli_query($conexion, $query);

    return $resultado;
}