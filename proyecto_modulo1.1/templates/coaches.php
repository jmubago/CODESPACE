<?php  
if(empty($_GET)){
}elseif(isset ($_GET["verId"])){
$variableVerId = $_GET["verId"];

$sql_ver_usuarios = "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.id=" . $variableVerId . ";";
$resultado_ver_usuarios = sqlsrv_query( $conn, $sql_ver_usuarios);

}elseif(isset ($_GET["eliminarId"])){
$variableEliminarId = $_GET["eliminarId"];

$sql_eliminar_usuarios = "UPDATE [dbo].[Usuarios] SET Coach = NULL WHERE id = " . $variableEliminarId . ";";
$resultado_eliminar_usuarios = sqlsrv_query( $conn, $sql_eliminar_usuarios);

}else{
$variableAnadirId = $_GET["anadirId"]; 

$sql_anadir_usuarios = "UPDATE [dbo].[Usuarios] SET Coach =" . $_SESSION["coach"]["id"] . "WHERE id =" . $variableAnadirId . ";";
$resultado_anadir_usuarios = sqlsrv_query( $conn, $sql_anadir_usuarios);
}
?>
<div class="container-fluid">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-2 text-center" >
            <h4 style="color: black">Hola <?php echo $_SESSION["coach"]["Nombre"]?></h4>
            <h5>Nosotros podemos ayudarte</h5>
        </div>
    </div>
</div>


<div class="container my-1">
    <div class="row ">
        <div class="col text-center">
            <h5>Tus Usuarios</h5>
        </div>
    </div>
    <div class="row ">
<?php while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){?>   
                    <div class="col-sm-12 col-md-6 col-lg-4 my-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios["Foto"]?>" alt="<?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"]?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"] ?> </h5>
                            <p class="card-text"><?php echo $usuario_usuarios["SobreMi"]?></p>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-5">  
                                    <a href="?verId=<?php echo $usuario_usuarios["id"]?>" class="verInfo btn btn-outline-primary btn-rounded waves-effect" role="button">Ver info</a>
                                </div>
                                <div class="col-sm-5">
                                    <a href="?eliminarId=<?php echo $usuario_usuarios["id"]?>" class="botton-eliminar"><i class="fas fa-ban"></i></a> 
                                </div>     
                              </div>        
                            </div>
                        </div>
                    </div>   
    <?php ;  }?>
    </div>    
</div>


<div class="container mt-3">
    <div class="row ">
        <div class="col text-center">
            <h5>Más información de tus Usuarios</h5>
        </div>
    </div>
 <div class="container my-3">
    <div class="row">
    <?php if (isset($_GET["verId"])) {
        while ($ver_usuarios = sqlsrv_fetch_array( $resultado_ver_usuarios, SQLSRV_FETCH_ASSOC)){?>   
                        <div class="col-sm-12 col-md-6 col-lg-4 my-3 col-centered">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $ver_usuarios["Foto"]?>" alt="<?php echo $ver_usuarios["Nombre"] . " " . $ver_usuarios["Apellido"]?>">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $ver_usuarios["Nombre"] . " " . $ver_usuarios["Apellido"] ?> </h5>
                                <p class="card-text"><?php echo $ver_usuarios["SobreMi"]?></p>
                              </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Empresa:</strong> <?php echo $ver_usuarios["Empresa"]?></li>
                                    <li class="list-group-item"><strong>Idioma:</strong> <?php echo $ver_usuarios["Idioma"]?></li>
                                    <li class="list-group-item"><strong>Coach:</strong> <?php echo $ver_usuarios["Coach"]?></li>
                                    <li class="list-group-item"><strong>Email:</strong> <?php echo $ver_usuarios["EmailContacto"]?></li>
                                    <li class="list-group-item"><strong>Telefono:</strong> <?php echo $ver_usuarios["Telefono"]?></li>
                                </ul>
                            </div>
                        </div>   
    <?php ;  } }?>
        </div>    
    </div>   
     
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h5>Usuarios que están libres</h5>
        </div>
    </div>
    <div class="container my-3">
    <div class="row ">
    
    <?php while ($usuario_usuarios_libres = sqlsrv_fetch_array( $resultado_usuarios_libres, SQLSRV_FETCH_ASSOC)){?>   
                    <div class="col-sm-12 col-md-6 col-lg-4 my-3">
                        <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios_libres["Foto"]?>" alt="<?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"]?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"] ?> </h5>
                            <p class="card-text"><?php echo $usuario_usuarios_libres["SobreMi"]?></p>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-5">  
                                    <a href="?anadirId=<?php echo $usuario_usuarios_libres["id"]?>" class="btn btn-outline-primary btn-rounded waves-effect anadirUsuario" role="button">Añdir a mis usuarios</a>
                                </div>  
                              </div>        
                            </div>
                        </div>
                    </div>   
    <?php ;  }?>
    </div>
</div>

  






