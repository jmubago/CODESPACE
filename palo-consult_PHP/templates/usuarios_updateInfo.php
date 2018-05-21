<div class="container">
    <div class="row ">
        <div class="col mt-2 text-center">
            <h4 style="color: black">Modify your personal data</h4>
            <h5>In case there is anything wrong</h5>
        </div> 
    </div>
</div>
<div class="container my-3">
    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 my-3 col-centered">
                            <div class="card" style="width: 40rem;">
                              <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $_SESSION["usuario"]["Foto"]?>" alt="<?php echo $_SESSION["usuario"]["Nombre"] . ' ' . $_SESSION["usuario"]["Apellido"]?>">
                              <div class="card-body">
                                  <div class="row ml-3">
                                    <form id="modificarFoto" method="post" action="<?php echo $root?>loginUsuario/modificarFoto_OK.php" enctype="multipart/form-data">
                                        <div class="form-group row"> 
                                            <div class="col-sm-10"> 
                                                <input type="file" name="foto" id="fileToUpload"> 
                                            </div> 
                                        </div>  
                                        <div class="form-group row"> 
                                            <div class="col-sm-10"> 
                                            <button href="?modifyPhoto=modifyPhoto" type="submit" class="btn btn-success">UPDATE</button> 
                                            </div> 
                                        </div>
                                    </form>    
                                  </div>        
                                </div>
                            </div>
                        </div>  
        </div>    
    </div>

<div class="container my-5">
<?php if(isset($mensaje_foto)){?>
    <div class="alert alert-success" role="alert">
        <p><?php echo $mensaje_foto?></p>
    </div> 
    <?php } ?> 
</div> 


<div class="container my-5">    
    <form id="modificarDatos" method="post" action="<?php echo $root?>loginUsuario/modificarDatos_OK.php">
      
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION["usuario"]["EmailContacto"]?>">
        </div>
      </div>
       <div class="form-group row">
        <label for="telefono" class="col-sm-2 col-form-label">Phone number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $_SESSION["usuario"]["Telefono"]?>">
        </div>
      </div> 
      
      <div class="form-group row"> 
        <label for="comentario" class="col-sm-2 col-form-label">About you</label> 
        <div class="col-sm-10"> 
            <textarea name="comentario" class="form-control"><?php echo $_SESSION["usuario"]["SobreMi"]?></textarea> 
        </div> 
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="verInfo btn btn-success btn-rounded waves-effect">UPDATE</button>
        </div>
      </div>
    </form>
</div>

<div class="container my-5">
<?php if(isset($mensaje_datos)){?>
    <div class="alert alert-success" role="alert">
        <p><?php echo $mensaje_datos?></p>
    </div> 
    <?php } ?> 
</div>    


<div class="container my-5">    
    <form id="modificarPassword" method="post" action="<?php echo $root?>loginUsuario/modificarPassword_OK.php">
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Current Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">New Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="repassword" class="col-sm-2 col-form-label">Repeat your password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repeat your password">
        </div>
      </div> 
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="verInfo btn btn-success btn-rounded waves-effect">UPDATE</button>
        </div>
      </div>
    </form>
</div>

<div class="container my-5">
<?php if(isset($mensaje_password)){?>
    <div class="alert alert-success" role="alert">
        <p><?php echo $mensaje_password?></p>
    </div> 
    <?php } ?> 
<?php if(isset($mensaje_error)){?>
    <div class="alert alert-danger" role="alert">
        <p><?php echo $mensaje_error?></p>
    </div> 
    <?php } ?> 
</div> 

<script>
    $(document).ready(function(){
        $("#modificarDatos").validate({
            rules: {
                email: {
                    required:true,
                    email:true
                },
                telefono: {
                    required: true,
                    minlength: 5
                }
             },
            messages: {
                email: "You have to introduce a valid email",
                telefono: "You have to introduce a phone number"
            }
        })
        $("#modificarPassword").validate({
            rules: {
                newPassword: {
                    required: true,
                    minlength: 6,
                    maxlength: 12
                },
                repassword: {
                    equalTo: "#newPassword",
                }
             },
            messages: {
                newPassword: "You have to introduce a password. Min 6 characters, max 12 characters",
                repassword: "You have to introduce the same new password"
            }
        })
    })
</script>