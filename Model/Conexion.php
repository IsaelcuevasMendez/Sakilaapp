<?php

$host = "localhost";
$usuario = "root";
$contraseña = "";
$baseDato = "sakila";

$conexion = mysqli_connect($host, $usuario, $contraseña, $baseDato);

if (!$conexion) {
    echo "Hubo un error en la conecarnos";
}

