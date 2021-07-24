<?php require_once 'partes/head.php'; ?>
<?php require_once 'partes/menu.php'; ?>




<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">



    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->

</div>

<!--Content ends-->

<div class="bg-light">
    <div class="container">
        <h1 class="display-1 py-5"><?php echo $pagina; ?></h1>
    </div>
</div>

<!-- Formulario -->
<div class="container1">
    <form action="">
        <div class="group">
            <input name="nombre" type="text">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Name</label>
            <!--Boton Buscar 🡺 --> <button name="buscar" class="boton">Buscar</button>
        </div>

    </form>
</div>
<section>
    <!--for demo wrap-->
    <h1>Fixed Table header</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Company</th>
                    <th>Price</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <?php
                while ($dato = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>
                    <th scope='row'>{$dato['country_id']}</th>
                    <td>{$dato['country']}</td>
                    <td>{$dato['last_update']}</td>
                    <td></td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php require_once 'partes/foot.php'; ?>