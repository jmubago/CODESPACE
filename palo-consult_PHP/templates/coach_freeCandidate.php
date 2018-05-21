<div class="container">
    <div class="row">
        <div class="col mt-2 text-center">
            <h4 style="color: black">Free candidates</h4>
            <h5>Who are you willing to help</h5>
        </div>
    </div>
    <div class="container">
    <div class="row ">
    
    <?php while ($usuario_usuarios_libres = sqlsrv_fetch_array( $resultado_usuarios_libres, SQLSRV_FETCH_ASSOC)){?>   
                    <div class="col-sm-12 col-md-6 col-lg-4 my-3" align="center">
                        <div class="card" style="width: 30rem;" align="left">
                          <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios_libres["Foto"]?>" alt="<?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"]?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario_usuarios_libres["Nombre"] . " " . $usuario_usuarios_libres["Apellido"] ?> </h5>
                            <p class="card-text"><?php echo $usuario_usuarios_libres["SobreMi"]?></p>
                          </div>
                          <div class="card-body" align="center">
                              <div class="row ml-3" >
                                <div class="col-sm-5">  
                                    <form id="escogerCandidato" method="post" action="<?php echo $root?>loginCoach/escoger_candidato.php" enctype="multipart/form-data">
                                        <a href="?anadirId=<?php echo $usuario_usuarios_libres["id"]?>" class="btn btn-success btn-rounded waves-effect anadirUsuario">Add to my candidates</a>
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