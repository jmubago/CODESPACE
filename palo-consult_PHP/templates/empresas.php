<?php 
if(empty($_GET)){
}else{
$variable = $_GET["candidato"];}
?>
<div class="container-fluid">
    <div class="row" style="background-color: #FFFFFF; height: 150px">
        <div class="col mt-5 text-center" >
            <h4 style="color: black">Hi <?php echo $_SESSION["empresas"]["RazonSocial"]?></h4>
            <h5>We can help you</h5>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h5>Your candidate´s list</h5>
        </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Name</th>
          <th scope="col">Last name</th>
          <th scope="col">Email</th>
          <th scope="col">Coach</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){
            echo "<tr><td>" . $usuario_usuarios["Nombre"] 
                    . "</td><td>" . $usuario_usuarios["Apellido"] 
                    . "</td><td>" . $usuario_usuarios["EmailContacto"]
                    . "</td><td>" . $usuario_usuarios["Coach"] 
                    . "</td></tr>";
        } ?>
      </tbody>
    </table>
</div>

<div class="container-fluid mb-5">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-5 text-center" >
            <div class="btn-group mx-3">
                <a href="?candidato=usuario" class="btn btn-outline-info btn-rounded waves-effect" role="button">Add your new candidates</a>
            </div> 
        </div>
    </div>
</div>

<?php if (isset($_GET["candidato"])) {
    include ('registro_' . $variable . '.php');
} ?> 


<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h5>Your company´s general information</h5>
        </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Name</th>
          <th scope="col">Vat Number</th>
          <th scope="col">Activity</th>
          <th scope="col">Country</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Contact Person</th>
          <th scope="col">Bank Account</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        while ($usuario_empresas = sqlsrv_fetch_array( $resultado_empresa, SQLSRV_FETCH_ASSOC)){
            echo "<tr><td>" . $usuario_empresas["RazonSocial"] 
                    . "</td><td>" . $usuario_empresas["CIF"] 
                    . "</td><td>" . $usuario_empresas["Actividad"] 
                    . "</td><td>" . $usuario_empresas["Pais"] 
                    . "</td><td>" . $usuario_empresas["Direccion"] 
                    . "</td><td>" . $usuario_empresas["EmailContacto"] 
                    . "</td><td>" . $usuario_empresas["Telefono"] 
                    . "</td><td>" . $usuario_empresas["PersonaContacto"] 
                    . "</td><td>" . $usuario_empresas["IBAN"] 
                    . "</td></tr>";
        } ?>
      </tbody>
    </table>
</div>
