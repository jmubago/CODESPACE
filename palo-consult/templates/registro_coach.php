<div class="row">
        <div class="col mt-1 text-center">
            <h5>You are login as Coach</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="registro" method="post" action="<?php echo $root?>registroCoach/registro_OK.php">
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Name">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Surname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Surname">
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
        <label for="iban" class="col-sm-2 col-form-label">Banck account</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="iban" name="iban" placeholder="Banck account">
        </div>
      </div>
      <div class="form-group row">
        <label for="idiomaSelec" class="col-sm-2 col-form-label">Language</label>
        <div class="col-sm-10">
          <select name="idiomaSelec">
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
             },
            messages: {
                nombre: "Debes introducir tu nombre",
                email: "Debes introducir un email válido",
                password: "Debes introducir una contraseña válida",
                repassword: "Debes introducir la misma contraseña"
            }
        })
    })
</script>