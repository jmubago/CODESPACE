<div class="row">
        <div class="col mt-1 text-center">
            <h5>Te estás registrando como Empresa</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="registro" method="post" action="<?php echo $root?>registroEmpresas/registro_OK.php">
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Razón Social</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="razonSocial" name="razonSocial" placeholder="Razón Social">
        </div>
      </div>
      <div class="form-group row">
        <label for="cif" class="col-sm-2 col-form-label">CIF</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="cif" name="cif" placeholder="CIF">
        </div>
      </div>
        
      <div class="form-group row">
        <label for="actividadSelec" class="col-sm-2 col-form-label">Actividad</label>
        <div class="col-sm-10">
          <select name="actividadSelec">
            <option value="1">Arquitectura y Urbanismo</option>
            <option value="2">Alimentación</option>
            <option value="3">Automóvil</option>
            <option value="4">Aviación y aeroespacial</option>
            <option value="5">Banca</option>
            <option value="6">Biotecnología</option>
            <option value="7">Química</option>
            <option value="8">Desarrollo Software</option>
            <option value="9">Gaming</option>
            <option value="10">Apuestas</option>
            <option value="11">Salud</option>
            <option value="12">Energía</option>
            <option value="13">Construcción</option>
          </select>

        </div>
      </div>
      <div class="form-group row">
        <label for="paisSelec" class="col-sm-2 col-form-label">País</label>
        <div class="col-sm-10">
          <select name="paisSelec">
            <option value="1">España</option>
            <option value="2">Francia</option>
            <option value="3">Estados Unidos</option>
            <option value="4">Canadá</option>
            <option value="5">Reino Unido</option>
            <option value="6">Alemania</option>
            <option value="7">Holanda</option>
            <option value="8">Japón</option>
          </select>
        </div>
      </div>  
      <div class="form-group row">
        <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
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
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
        </div>
      </div> 
      <div class="form-group row">
        <label for="personaContacto" class="col-sm-2 col-form-label">Persona Contacto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="personaContacto" name="personaContacto" placeholder="Persona Contacto">
        </div>
      </div>  
      <div class="form-group row">
        <label for="iban" class="col-sm-2 col-form-label">IBAN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="iban" name="iban" placeholder="IBAN">
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
                razonSocial: {
                    required: true,
                    minlength: 2
                    },
                cif: {
                    required: true,
                    minlength: 8,
                    maxlength: 8
                    },
                direccion: {
                    required: true,
                    minlength: 5
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
                },
                personaContacto: {
                    required: true,
                    minlength: 5
                },
                iban: {
                    required:true,
                    minlength: 10
                },
             },
            messages: {
                razonSocial: "Debes introducir tu Razón Social",
                cif: "Debes introducir tu CIF",
                direccion: "Debes introducir tu dirección",
                email: "Debes introducir un email válido",
                password: "Debes introducir una contraseña válida",
                repassword: "Debes introducir la misma contraseña",
                telefono: "Debes introducir tu teléfono",
                personaContacto: "Debes introducir la persona de contacto",
                iban: "Debes introducir tu IBAN",
            }
        })
    })
</script>