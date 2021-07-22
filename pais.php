<?php

require_once 'Model/model_pais.php';

$pagina = "Pais";

$resultado = obtenerPais($conexion);

#incluir la vista
require_once 'Vistas/pais.html.php';