<?php require_once 'partes/head.php'; ?>
<?php require_once 'partes/menu.php';
?>

<div class="bg-light">
    <div class="container">
        <h1 class="display-1 py-5"><?php echo $pagina; ?></h1>
    </div>
</div>

<!-- Formulario -->
<div class="container">
    <form action="">
        <div class="form-group">
            <input type="search" name="nombre" id="" class="form-control" placeholder="Escribe para buscar">
            <button name="buscar" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

<!--Tabla-->
<!-- Cabecera de la tabla 🡻 -->
<div class= "table container">
    <table class="table table-dark table-striped">
    <thead>
        <tr class="table-primary">
        <th scope="col">#</th>
        <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            
<!-- Tabla y contenido 🡻 -->
<table class="table table-dark table-striped">
    <thead>
        </tr class="table-primary">
    </thead>
    <tbody>

    
        <?php
        while ($dato = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <th scope='row'>{$dato['category_id']}</th>
                    <td>{$dato['name']}</td>
                    <td>{$dato['last_update']}</td>
                    <td></td>
                </tr>";
        }
        ?>
    </tbody>
</table>
<?php require_once 'partes/foot.php'; ?>