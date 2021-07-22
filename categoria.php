<?php

require_once 'Model/model_categoria.php';

$pagina = "Categorias";

$resultado = obtenerCategorias($conexion);

#incluir la vista
require_once 'Vistas/categoria.html.php';