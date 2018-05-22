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