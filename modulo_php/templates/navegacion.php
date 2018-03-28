<div id="navegacion">
    <div class="left">
        <?php if($pagina_anterior!='') { ?>
        <a href="<?php echo $pagina_anterior?>" id="nav_anterior"><< Anterior </a>
        <?php } ?>
    </div>
    <div class="right">
        <?php if($pagina_siguiente!='') { ?>
        <a href="<?php echo $pagina_siguiente?>" id="nav_siguiente">Siguiente >></a>
        <?php } ?>
    </div>
</div>