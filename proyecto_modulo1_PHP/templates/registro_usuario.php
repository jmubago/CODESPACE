<?php
$sql_select_empresa = "SELECT [id], [RazonSocial] FROM [dbo].[Empresa];";
$resultado_select_empresa = sqlsrv_query( $conn, $sql_select_empresa );

?>


<div class="row">
        <div class="col mt-1 text-center">
            <h5>Te estás registrando como Usuario</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="registro" method="post" action="<?php echo $root?>registroUsuario/registro_OK.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escribe tu apellido">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
      </div>
      <div class="form-group row">
        <label for="repassword" class="col-sm-2 col-form-label">Repite la contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Contraseña">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escribe tu teléfono">
        </div>
      </div>
      <div class="form-group row">
        <label for="idiomaSelec" class="col-sm-2 col-form-label">Idioma</label>
        <div class="col-sm-10">
          <select name="idiomaSelec" class="form-control">
            <option value="1">Español</option>
            <option value="2">Francés</option>
            <option value="3">Inglés</option>
            <option value="4">Alemán</option>
            <option value="5">Holandés</option>
            <option value="6">Japonés</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <label for="empresaSelec" class="col-sm-2 col-form-label">Empresa</label>
        <div class="col-sm-10">
          <select name="empresaSelec" class="form-control">
                    <option value="<?php echo $idconfirmacion["id"]?>"><?php echo $idconfirmacion["RazonSocial"]?></option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="comentario" class="col-sm-2 col-form-label">Sobre ti</label>
        <div class="col-sm-10">
            <textarea name="comentario" class="form-control">Escribe algo sobre ti</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="foto" class="col-sm-2 col-form-label">Tu foto</label>
        <div class="col-sm-10">
            <input type="file" name="foto" id="fileToUpload">
        </div>
      </div>  
        
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Regístrate</button>
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
                nombre: "Debes introducir tu nombre",
                email: "Debes introducir un email válido",
                password: "Debes introducir una contraseña válida",
                repassword: "Debes introducir la misma contraseña",
                telefono: "Debes introducir tu teléfono",
            }
        })
    })
</script>