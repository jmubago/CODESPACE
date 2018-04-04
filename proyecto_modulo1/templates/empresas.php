
<?php  

$data_usuarios = $_SESSION["usuario"];
echo $_SESSION["usuario"];
    foreach ($data_usuarios as $valor){
        print $valor;
        }
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
          <th scope="col">Edad</th>
          <th scope="col">Coach</th>
          <th scope="col">Finalizado</th>
        </tr>
      </thead>
      <tbody>
          
        <tr>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        
      </tbody>
    </table>
</div>