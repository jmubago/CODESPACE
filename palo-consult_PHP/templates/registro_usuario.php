<?php
$sql_select_empresa = "SELECT [id], [RazonSocial] FROM [dbo].[Empresa];";
$resultado_select_empresa = sqlsrv_query( $conn, $sql_select_empresa );

?>


<div class="row">
        <div class="col mt-1 text-center">
            <h5>Register a new Candidate</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="registro" method="post" action="<?php echo $root?>registroUsuario/registro_OK.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Candidate´s name">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Last name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Candidate´s last name">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="Candidate´s email">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="repassword" class="col-sm-2 col-form-label">Repeat the password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Repeat password">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Phone number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Candidate´s phone number">
        </div>
      </div>
      <div class="form-group row">
        <label for="idiomaSelec" class="col-sm-2 col-form-label">Language</label>
        <div class="col-sm-10">
          <select name="idiomaSelec" class="form-control">
            <option value="1">Spanish</option>
            <option value="2">French</option>
            <option value="3">English</option>
            <option value="4">German</option>
            <option value="5">Dutch</option>
            <option value="6">Japanese</option>
          </select>
        </div>
      </div>  
      <div class="form-group row">
        <label for="empresaSelec" class="col-sm-2 col-form-label">Enterprise</label>
        <div class="col-sm-10">
          <select name="empresaSelec" class="form-control">
                    <option value="<?php echo $_SESSION["empresas"]["id"]?>"><?php echo $_SESSION["empresas"]["RazonSocial"]?></option>
          </select>
        </div>
      </div>
        
      
      <!--
      <div class="form-group row">
        <label for="foto" class="col-sm-2 col-form-label">Tu foto</label>
        <div class="col-sm-10">
            <input type="file" name="foto" id="fileToUpload">
        </div>
      </div>  
        -->
     
      <div class="container-fluid mb-5">
        <div class="row" style="background-color: #FFFFFF">
            <div class="col mt-5 text-center" >
                <div class="btn-group mx-3">
                    <button type="submit" class="btn btn-primary">Register</button>
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
                email: {
                    required:true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 12
                },
                repassword: {
                    equalTo: "#password"
                },
                telefono: {
                    required: true,
                    minlength: 5
                }
             },
            messages: {
                nombre: "You have to introduce a name. Min 2 characters",
                email: "You have to introduce a valid email",
                password: "You have to introduce a password. Min 6 characters, max 12 characters",
                repassword: "You have to introduce the same password",
                telefono: "You have to introduce a phone number",
            }
        })
    })
</script>