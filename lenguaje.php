<?php

require_once 'Model/model_lenguaje.php';

$pagina = "Idiomas";

$resultado = obtenerLenguaje($conexion);

#incluir la vista
require_once 'Vistas/lenguaje.html.php';