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
      <?php if(isset($_SESSION["coach"])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginCoach/mi-cuenta/index.php">Hello <?php echo $_SESSION["coach"]["Nombre"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginCoach/close.php">Close session</a>
            </li>
      <?php } elseif(isset($_SESSION["empresas"])) {?>      
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginEmpresas/mi-cuenta/index.php"><?php echo $_SESSION["empresas"]["RazonSocial"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginEmpresas/close.php">Close session</a>
            </li>
      <?php } elseif(isset($_SESSION["usuario"])) {?>      
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>loginUsuario/mi-cuenta/index.php">Hello <?php echo $_SESSION["usuario"]["Nombre"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>loginUsuario/close.php">Close session</a>
            </li>
      <?php }else{ ?>
            
            
      <div class="btn-group mx-3">
        <a href="<?php echo $root?>login/index.php" class="btn btn-outline-primary btn-rounded waves-effect" role="button">Login</a>
      </div>  
            
      <div class="btn-group mx-3">
        <a href="<?php echo $root?>registro/index.php" class="btn btn-outline-info btn-rounded waves-effect" role="button">Register</a>
      </div>    
      <?php } ?>
    </ul>
      
  </div>
</nav>