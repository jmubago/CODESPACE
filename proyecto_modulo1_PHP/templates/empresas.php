
<?php  

/*

while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){
    echo "Nombre: " . $usuario_usuarios["Nombre"] . " Apellido: " . $usuario_usuarios["Apellido"] . " Email: " . $usuario_usuarios["EmailContacto"] . "<br>";
}



while ($usuario_empresas = sqlsrv_fetch_array( $resultado_empresa, SQLSRV_FETCH_ASSOC)){
    echo "Nombre: " . $usuario_empresas["RazonSocial"] . " Apellido: " . $usuario_empresas["CIF"] . " Email: " . $usuario_empresas["CIF"];
}
 
 */
?>
<div class="container-fluid">
    <div class="row" style="background-color: #FFFFFF; height: 150px">
        <div class="col mt-5 text-center" >
            <h4 style="color: black">Hola <?php echo $_SESSION["empresas"]["RazonSocial"]?></h4>
            <h5>Nosotros podemos ayudarte</h5>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h5>Tu lista de Usuarios</h5>
        </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
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


<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h5>Tu lista de Usuarios</h5>
        </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Razón Social</th>
          <th scope="col">CIF</th>
          <th scope="col">Actividad</th>
          <th scope="col">Pais</th>
          <th scope="col">Dirección</th>
          <th scope="col">Email</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Persona Contacto</th>
          <th scope="col">IBAN</th>
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
