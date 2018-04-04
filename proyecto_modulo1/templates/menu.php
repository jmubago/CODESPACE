<nav class="navbar navbar-expand-lg navbar-light">
      <!-- <a class="navbar-brand" href="#"><img src="<?php echo $root?>images/logo.png" alt="Frutería"></a> -->
  <a id="logo" href="<?php echo $root?>index.php"><img src="<?php echo $root?>media/logo.png" alt="Frutería"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $root?>index.php">Palo Consult<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $root?>glassdoor/index.php">Glassdoor <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION["coach"])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginCoach/mi-cuenta/index.php">Hola <?php echo $_SESSION["coach"]["Nombre"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginCoach/close.php">Cerrar sesión</a>
            </li>
      <?php } elseif(isset($_SESSION["empresas"])) {?>      
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginEmpresas/mi-cuenta/index.php"><?php echo $_SESSION["empresas"]["RazonSocial"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginEmpresas/close.php">Cerrar sesión</a>
            </li>
      <?php } elseif(isset($_SESSION["usuario"])) {?>      
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginUsuario/mi-cuenta/index.php">Hola <?php echo $_SESSION["usuario"]["Nombre"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginUsuario/close.php">Cerrar sesión</a>
            </li>
      <?php }else{ ?>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Log in
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo $root?>loginUsuario">Usuario</a>
            <a class="dropdown-item" href="<?php echo $root?>loginCoach">Coach</a>
            <a class="dropdown-item" href="<?php echo $root?>loginEmpresas">Empresa</a>
        </div>
       </div>   
       <div class="btn-group">
        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Regístro
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo $root?>registroUsuario/index.php">Usuario</a>
            <a class="dropdown-item" href="<?php echo $root?>registroCoach/index.php">Coach</a>
            <a class="dropdown-item" href="<?php echo $root?>registroEmpresas/index.php">Empresa</a>
        </div> 
       </div>
      <?php } ?>
    </ul>
      
  </div>
</nav>