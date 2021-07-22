<?php require_once 'partes/head.php';?>
<?php require_once 'partes/menu.php';?>

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
<div class= "container">
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        <table class="table">
  <thead class="table-dark">
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dato = mysqli_fetch_assoc($resultado)) {
            echo "<tr class='Elpepe'>
                    <th  scope='row'>{$dato['actor_id']}</th>
                    <td>{$dato['first_name']}</td>
                    <td>{$dato['last_name']}</td>
                    <td></td>
                </tr>";
        }
        ?>
    </tbody>
</table>
    </div>
<?php require_once 'partes/foot.php'; ?>