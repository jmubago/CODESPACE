<?php 
if(empty($_GET)){
}else{
$variable = $_GET["tipo"];}
?>
<div class="container-fluid imagenes-iniciales">
   <div class="row">
        <div class="col mt-1 text-center">
            <h5>Login</h5>
        </div>
 </div>
<div class="container my-2">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
            <img class="img-fluid" src="../media/login-usuario.jpg" alt="Card image cap">  
          <div class="card-body">
            <h5 class="card-title">Candidates</h5>
            <p class="card-text">If you are one of the candidates benefiting from our outplacement services login here.</p>
                <a href="?tipo=usuario" class="btn btn-primary btn-rounded waves-effect" role="button">Candidates</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
            <img class="img-fluid" src="../media/login-coach.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Coaches</h5>
            <p class="card-text">If you are part of our amazing coaching team you have to access to your panel here</p>
                <a href="?tipo=coach" class="btn btn-primary btn-rounded waves-effect" role="button">Coach</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
            <img class="img-fluid" src="../media/login-empresa.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Enterprises</h5>
            <p class="card-text">If you are one of the many enterprises who trust in our services, access your panel here</p>
            <a href="?tipo=empresas" class="btn btn-primary btn-rounded waves-effect" role="button">Enterprise</a>
          </div>
        </div>
      </div>  
    </div>
</div>
  
<div class="container my-5"> 
 <?php if(isset($mensaje)){?>
    <div class="alert alert-success" role="alert">
        <p><?php echo $mensaje?></p>
    </div> 
    <?php } ?>   
    
    
 <?php if (isset($_GET["tipo"])) {
    include ('login_' . $variable . '.php');
} ?>  
</div>     