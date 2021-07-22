<?php

require_once 'Model/model_lenguaje.php';

$pagina = "Lenguaje";

$resultado = obtenerLenguaje($conexion);

#incluir la vista
require_once 'Vistas/lenguaje.html.php';