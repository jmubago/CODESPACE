
<div class="container-fluid">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-2 text-center" >
            <h4 style="color: black">Hello <?php echo $_SESSION["coach"]["Nombre"]?></h4>
            <h5>Who do you want to help today?</h5>
        </div>
    </div>
</div>


<div class="container my-1">
    <div class="row ">
        <div class="col text-center">
            <h5>Your candidates</h5>
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
                                    <button href="?verId=<?php echo $usuario_usuarios["id"]?>" class="verInfo btn btn-outline-primary btn-rounded waves-effect" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo $usuario_usuarios["id"]?>" aria-expanded="false" aria-controls="collapseExample">
                                        See + info
                                    </button>
                                </div>
                                <div class="col-sm-5">
                                    <a href="?eliminarId=<?php echo $usuario_usuarios["id"]?>" class=""><i class="fas fa-ban botton-eliminar"></i></a>
                                </div>
                              </div>        
                            </div>
                            <div class="row">
                                <div class="col-12">
                                  <div class="collapse" id="collapseExample<?php echo $usuario_usuarios["id"]?>">
                                    <div class="card card-body">
                                        <div class="row ">
                                            <div class="col text-center my-3">
                                                <h5>More candidate´s info</h5>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><strong>Enterprise:</strong> <?php echo $usuario_usuarios["Empresa"]?></li>
                                            <li class="list-group-item"><strong>Language:</strong> <?php echo $usuario_usuarios["Idioma"]?></li>
                                            <li class="list-group-item"><strong>Coach:</strong> <?php echo $usuario_usuarios["Coach"]?></li>
                                            <li class="list-group-item"><strong>Email:</strong> <?php echo $usuario_usuarios["EmailContacto"]?></li>
                                            <li class="list-group-item"><strong>Phone number:</strong> <?php echo $usuario_usuarios["Telefono"]?></li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>   
    <?php ;  }?>
    </div>    
</div>



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
                        <div class="card" style="width: 18rem;">
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

  






