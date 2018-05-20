<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h5>Free candidates</h5>
        </div>
    </div>
    <div class="container my-3">
    <div class="row ">
    
    <?php while ($usuario_usuarios_libres = sqlsrv_fetch_array( $resultado_usuarios_libres, SQLSRV_FETCH_ASSOC)){?>   
                    <div class="col-sm-12 col-md-6 col-lg-4 my-3">
                        <div class="card" style="width: 30rem;">
                          <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios_libres["Foto"]?>" alt="<?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"]?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"] ?> </h5>
                            <p class="card-text"><?php echo $usuario_usuarios_libres["SobreMi"]?></p>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-5">  
                                    <form id="escogerCandidato" method="post" action="<?php echo $root?>loginCoach/escoger_candidato.php" enctype="multipart/form-data">
                                        <a href="?anadirId=<?php echo $usuario_usuarios_libres["id"]?>" class="btn btn-outline-primary btn-rounded waves-effect anadirUsuario" role="button">Add to my candidates</a>
                                    </form>    
                                </div>  
                              </div>        
                            </div>
                        </div>
                    </div>   
    <?php ;  }?>
    </div>
</div>
</div> 