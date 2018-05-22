<?php 
if(empty($_GET)){
}else{
$variable = $_GET["usuarioButton"];}
?>
<div id="sidenav">
  <div class="sidenavTexto">
      <div class="hello" align="center">
        <p>Hello</p> 
      </div>
      <div class="userNAme" align="center">
        <h5><?php echo $_SESSION["usuario"]["Nombre"] . " " . $_SESSION["usuario"]["Apellido"] ?></h5>
      </div>
        <div class="sidebarButton">
          
          <div>
            <a href="?usuarioButton=info" id="your-candidate-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Your info</a>
          </div>
          <div>
            <a href="?usuarioButton=updateInfo" id="create-form-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Update info</a>
          </div>
        </div>   
    </div>    
</div>

<div id="innerMain">
    <?php if (isset($_GET["usuarioButton"])) {
        include ('usuarios_' . $variable . '.php');
    } ?> 
    <div class="container mensaje-alerta-candidatos"> 
     <?php if(isset($mensaje_usuarios)){?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje_usuarios?>
        </div> 
        <?php } ?>   
        <?php if(isset($mensaje_error)){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $mensaje_error?>
        </div> 
        <?php } ?>
    </div>     
</div>
