<h1>02. Entorno de desarrollo. WAMP</h1>

<ul>
    <li>Apache. Servidor WEB</li>
    <li>MySQL. Base de datos</li>
    <li>PHP. Lenguaje de programación</li>
    <li>Netbeans. IDE de desarrollo</li>
</ul>

<ul>
    <li>
        <a href="http://www.wampserver.com/en/" target="_blank">Descargar WAMP</a>
    </li>
    <li>
        <a href=https://netbeans.org/" target="_blank">Descargar Netbeans</a>
    </li>
    <li>
        <a href=https://netbeansthemes.com/" target="_blank">Themes Netbeans</a>
    </li>
</ul>

<div id="navegacion">
    <div class="left">
        <a href="index.php" id="nav_anterior"><< Anterior </a>
    </div>
    <div class="right">
        <?php if($pagina_siguiente!='') { ?>
        <a href="<?php echo $pagina_siguiente?>" id="nav_siguiente">Siguiente >></a>
        <?php } ?>
    </div>
</div>
