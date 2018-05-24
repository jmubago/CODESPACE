<div class="row">
        <div class="col mt-1 text-center">
            <h5>You are login as Enterprise</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="registro" method="post" action="<?php echo $root?>registroEmpresas/registro_OK.php">
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Company name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="razonSocial" name="razonSocial" placeholder="Company name">
        </div>
      </div>
      <div class="form-group row">
        <label for="cif" class="col-sm-2 col-form-label">VAT number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="cif" name="cif" placeholder="VAT number">
        </div>
      </div>
        
      <div class="form-group row">
        <label for="actividadSelec" class="col-sm-2 col-form-label">Activity</label>
        <div class="col-sm-10">
          <select name="actividadSelec">
            <option value="1">Architecture and urbanism</option>
            <option value="2">Food Industry</option>
            <option value="3">Automotion industry</option>
            <option value="4">Airspace industry</option>
            <option value="5">Banking</option>
            <option value="6">Biotechnology</option>
            <option value="7">Chemistry</option>
            <option value="8">Software Development</option>
            <option value="9">Gaming</option>
            <option value="10">Gambling</option>
            <option value="11">Health Care</option>
            <option value="12">Energy Industry</option>
            <option value="13">Construction Industry</option>
          </select>

        </div>
      </div>
      <div class="form-group row">
        <label for="paisSelec" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-10">
          <select name="paisSelec">
            <option value="1">Spain</option>
            <option value="2">France</option>
            <option value="3">United States</option>
            <option value="4">Canada</option>
            <option value="5">UK</option>
            <option value="6">Germany</option>
            <option value="7">Holland</option>
            <option value="8">Japan</option>
          </select>
        </div>
      </div>  
      <div class="form-group row">
        <label for="direccion" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Address">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="repassword" class="col-sm-2 col-form-label">Repeat password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="telefono" class="col-sm-2 col-form-label">Phone number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Phone number">
        </div>
      </div> 
      <div class="form-group row">
        <label for="personaContacto" class="col-sm-2 col-form-label">Contact person</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="personaContacto" name="personaContacto" placeholder="Contact person">
        </div>
      </div>  
      <div class="form-group row">
        <label for="iban" class="col-sm-2 col-form-label">Bank account</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="iban" name="iban" placeholder="Bank account">
        </div>
      </div>
      
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Register</button>
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