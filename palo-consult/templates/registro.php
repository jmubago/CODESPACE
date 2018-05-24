<?php 
if(empty($_GET)){
}else{
$variable = $_GET["tipo"];}
?>
<div class="container-fluid imagenes-iniciales">
   <div class="row">
        <div class="col mt-1 text-center">
            <h5>Register</h5>
        </div>
 </div>  
<div class="container my-2">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
            <img class="img-fluid" src="../media/registro-coach.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Coaches</h5>
            <p class="card-text">If you are a Coach and you want to be part of our amazing team you can register here</p>
                <a href="?tipo=coach" class="btn btn-primary btn-rounded waves-effect" role="button">Coach</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
            <img class="img-fluid" src="../media/registro-empresa.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Enterprises</h5>
            <p class="card-text">Are you an enterprise and want to benefit from our Outplacement services? Register here</p>
            <a href="?tipo=empresas" class="btn btn-primary btn-rounded waves-effect" role="button">Enterprise</a>
          </div>
        </div>
      </div>  
    </div>
</div>
  
<div class="container my-5"> 
 <?php if(isset($mensaje)){?>
    <div class="alert alert-success" role="alert">
        <?php echo $mensaje?>
    </div> 
    <?php } ?>   
    
    
 <?php if (isset($_GET["tipo"])) {
    include ('registro_' . $variable . '.php');
} ?>  
</div>    
