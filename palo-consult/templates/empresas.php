<?php 
if(empty($_GET)){
}else{
$variable = $_GET["empresaButton"];}
?>

<div id="sidenav">
  <div class="sidenavTexto">
      <div class="hello" align="center">
        <p>Hello</p> 
      </div>
      <div class="userNAme" align="center">
        <h5><?php echo $_SESSION["empresas"]["RazonSocial"]?></h5>
      </div>
        <div class="sidebarButton">
          
          <div>
            <a href="?empresaButton=info" id="your-candidate-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Your info</a>
          </div>
          <div>
            <a href="?empresaButton=verCandidates" id="create-form-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Your candidates</a>
          </div>
          <div>
            <a href="?empresaButton=addCandidates" id="create-form-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Add candidates</a>
          </div>
        </div>   
    </div>    
</div>

<div id="innerMain">
<?php if (isset($_GET["empresaButton"])) {
        include ('empresas_' . $variable . '.php');
    } ?> 
    <div class="container mensaje-alerta-candidatos"> 
     <?php if(isset($mensaje_empresas)){?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje_empresas?>
        </div> 
        <?php } ?>   
        <?php if(isset($mensaje_error)){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $mensaje_error?>
        </div> 
        <?php } ?>
    </div> 
</div>    