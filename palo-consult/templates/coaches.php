<?php 
if(empty($_GET)){
}else{
$variable = $_GET["coachButton"];}
?>
<div id="sidenav">
  <div class="sidenavTexto">
      <div class="hello" align="center">
        <p>Hello</p> 
      </div>
      <div class="userNAme" align="center">
        <h5><?php echo $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"] ?></h5>
      </div>
        <div class="sidebarButton">
          
          <div>
            <a href="?coachButton=yourCandidate" id="your-candidate-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Your candidate</a>
          </div>
          <div>
            <a href="?coachButton=candidatesForm" id="create-form-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Create report</a>
          </div>
          <div>
            <a href="?coachButton=freeCandidate" id="free-candidate-button" class="verInfo btn btn-outline-success-sidebar btn-rounded waves-effect">Free candidates</a>
          </div>
        </div>   
    </div>    
</div>


<div id="innerMain">
    <?php if (isset($_GET["coachButton"])) {
        include ('coach_' . $variable . '.php');
    } ?> 
    <div class="container mensaje-alerta-candidatos"> 
     <?php if(isset($mensaje_candidatos)){?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje_candidatos?>
        </div> 
        <?php } ?>   
        <?php if(isset($mensaje_error)){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $mensaje_error?>
        </div> 
        <?php } ?>
    </div>     
</div>    

