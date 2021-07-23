
<nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <li><a href="<?php echo $url;?>/actores.php">Actores</a></li>
      <li><a href="<?php echo $url;?>/categoria.php">Categorias</a></li>
      <li><a href="<?php echo $url;?>/lenguaje.php">Idiomas</a></li>
      <li><a href="<?php echo $url;?>/pais.php">Categorias</a></li>
  </div>
</nav>