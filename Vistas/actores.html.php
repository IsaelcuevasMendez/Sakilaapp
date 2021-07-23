<?php require_once 'partes/head.php';?>
<?php require_once 'partes/menu.php';?>

<div class="bg-light">
    <div class="container">
        <h1 class="display-1 py-5"><?php echo $pagina; ?></h1>
    </div>
</div>

<!-- Formulario -->
<div class="container1">
    <form action="">
    <div class="group">      
      <input name="nombre" type="text" >
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
      <!--Boton Buscar 🡺 --> <button name="buscar" class= "boton">Buscar</button>
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