<?php 
if(empty($_GET)){
}else{
$variable = $_GET["tipo"];}
?>
<div class="container">
   <div class="row">
        <div class="col mt-1 text-center">
            <h5>Registro</h5>
        </div>
 </div>  
<div class="container my-2">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
            <img class="img-fluid" src="../media/registro-coach.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Para los coach</h5>
            <p class="card-text">Si ya formas parte de nuestro pedazo de grupo de Coachs tienes accede aquí a tu panel.</p>
                <a href="?tipo=coach" class="btn btn-outline-primary btn-rounded waves-effect" role="button">Coach</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
            <img class="img-fluid" src="../media/registro-empresa.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Para las empresas</h5>
            <p class="card-text">Si eres una de las afortunadas empresas que confía en nuestros servicios, puedes acceder aquí a tu panel.</p>
            <a href="?tipo=empresas" class="btn btn-outline-primary btn-rounded waves-effect" role="button">Empresa</a>
          </div>
        </div>
      </div>  
    </div>
</div>
  
<div class="container my-5"> 
 <?php if(isset($mensaje)){?>
    <div class="alert alert-success" role="alert">
        <?php echo $mensaje?></p>
    </div> 
    <?php } ?>   
    
    
 <?php if (isset($_GET["tipo"])) {
    include ('registro_' . $variable . '.php');
} ?>  
</div>    
