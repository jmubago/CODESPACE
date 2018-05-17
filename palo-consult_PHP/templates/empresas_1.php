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
    <?php  while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){ ?>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col" class="thWidth">Name</th>
          <th scope="col" class="thWidth">Last name</th>
          <th scope="col" class="thWidth">Email</th>
          <th scope="col" class="thWidth">Coach</th>
          <th scope="col" class="thWidth">Sessions</th>
          <th scope="col" class="thWidth">Report</th>
        </tr>
      </thead>
      
      <tbody>
        
            <?php if ($usuario_usuarios["Horas"] != null){$horas = $usuario_usuarios["Horas"]; $disabled = "active";}else{ $horas = "  Not completed"; $disabled = "disabled";} ?>
                <tr><td><?php echo $usuario_usuarios["Nombre"] ?>
                </td><td><?php echo $usuario_usuarios["Apellido"] ?>
                </td><td><?php echo$usuario_usuarios["EmailContacto"]?>
                </td><td><?php echo $usuario_usuarios["Coach"] . " " . $usuario_usuarios["CoachApellido"]?>
                </td><td><?php echo $horas?>  
                </td><td> <button class="verInfo btn btn-outline-primary btn-rounded waves-effect" type="button" data-toggle="collapse" data-target="#collapseReportCandidate<?php echo $usuario_usuarios["id"]?>" <?php echo $disabled?>>See report</button>    
                </td></tr> 
      </tbody>
      
    </table>
    <div class="container mt-3">
                    <div class="row">
                        <div class="col align-content-center">
                            <div class="collapse" id="collapseReportCandidate<?php echo $usuario_usuarios["id"]?>">
                                <div class="card card-body">
                                    <div class="row ">
                                        <div class="col text-center ">
                                            <h5>More candidate´s info</h5>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Name:</strong> <?php echo $usuario_usuarios["Nombre"]?></li>
                                        <li class="list-group-item"><strong>Sessions completed:</strong><?php echo " " . $horas?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <?php } ?>
</div>

<div class="container-fluid mb-5">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-5 text-center" >
            <div class="btn-group mx-3">
                <a href="?candidato=usuario" class="btn btn-outline-primary btn-rounded waves-effect" role="button">Add your new candidates</a>
            </div> 
        </div>
    </div>
</div>

<?php if (isset($_GET["candidato"])) {
    include ('registro_' . $variable . '.php');
} ?>

<?php if (isset ($registro_usuario)){
    include ( $root . "templates/auth/registro_usuario.php");
 }
?>




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
