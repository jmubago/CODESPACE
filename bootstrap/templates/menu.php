<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $root?>index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
     
      <?php if(isset($_SESSION["nombre"])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $root?>mi-cuenta/">Hola <?php echo $_SESSION["nombre"]["nombre"]?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $root?>login/close.php">Cerrar sesión</a>
            </li>
      <?php }else{ ?>
      <li class="nav-item">
          <a href="<?php echo $root?>login/index.php" class="botton-login"><i class="far fa-user-circle mx-3 align-middle"></i></a>
      </li>
      <li class="nav-item">
          <a href="<?php echo $root?>registro/index.php" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-ok"></span>Regístrate aquí</a>
      </li>
      <?php } ?>
    </ul>
      
  </div>
</nav>