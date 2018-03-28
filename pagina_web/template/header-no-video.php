            
    <div id="brand">
        <img src="<?php echo $root?>imagenes/logo.png" alt="Frutería" id="logo">
    </div>

    <div class="buttonheaderNoRoot">
        <ul>
                <li>
                <a href="<?php echo $root?>contacto" target="_blank">Contacto</a>
                </li>
                <li>
                <a href="<?php echo $root?>catalogo" target="_blank">Catalogo</a>
                </li>
                <li>
                <a href="<?php echo $root?>nosotros" target="_blank">Nosotros</a>
                </li>
                <li>
                <a href="<?php echo $root?>">Inicio</a>
                </li> 
        </ul>
    </div>
    
    <div id="mainimage">
        <h1><?php echo (isset($titulo_seccion_h1) && $titulo_seccion_h1!='') ? $titulo_seccion_h1 : ''?></h1>
        <br>
        <h2><?php echo (isset($titulo_seccion_h2) && $titulo_seccion_h2!='') ? $titulo_seccion_h2 : ''?></h2>
    </div>
