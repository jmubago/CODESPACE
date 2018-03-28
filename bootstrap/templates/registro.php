<div class="container">
    <?php if(isset($error)){?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?></p>
    </div> 
    <?php } ?>
  
  <form method="POST" class="form-horizontal" action="<?php echo $root?>login/registro.php" id="registro">
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre">
          </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Apellido:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Introduce tu apellido">
          </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Introduce tu email">
          </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
          <div class="col-sm-10"> 
            <input type="password" class="form-control" name="contraseña" id="pwd" placeholder="Introduce tu contraseña">
          </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Recuérdame</label>
        </div>
      </div>
    </div>
    <div class="row">  
        <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group"> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
            
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="nav-item"> 
                
                <strong>Si ya estás registrado:</strong>
            <a href="<?php echo $root?>login/index.php" class="btn btn-xs btn-info mb-2"><span class="glyphicon glyphicon-ok"></span>Login</a>
          </div>
        </div>
        </div>
    </div>  
</form>
</div>
<script>
    $(document).ready(function(){
        $("#registro").validate({
            rules: {
                nombre: {
                    required: true,
                    minlength: 2
                    },
                apellido: {
                    required: true,
                    minlength: 2
                    },
                email: "required",
                contraseña: "required"
             },
            messages: {
                nombre: "Debes introducir tu nombre",
                apellido: "Debes introducir tu apellido",
                email: "Debes introducir un email válido",
                contraseña: "Debes introducir una contraseña válida"
            }
        })
    })
</script>
