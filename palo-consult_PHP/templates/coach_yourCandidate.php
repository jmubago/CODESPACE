<div id="your-candidate" class="container my-5">
    <div class="row ">
        <div class="col text-center mt-5">
            <h5>Your candidates</h5>
        </div>
    </div>
    <div class="row ">
<?php while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){?>  
        <?php if ($usuario_usuarios["Horas"] != null){$horas = $usuario_usuarios["Horas"];}else{ $horas = "  Not completed";}?>
                    <div class="col-sm-12 col-md-6 col-lg-4 my-3" align="center">
                        <div class="card" style="width: 30rem;" align="left">
                            <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios["Foto"]?>" alt="<?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"]?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"] ?> </h5>
                            <p class="card-text"><?php echo $usuario_usuarios["SobreMi"]?></p>
                          </div>
                          <div class="card-body" align="center">
                              <div class="row ml-3" >
                                <div class="col-sm-5">  
                                    <button class="verInfo btn btn-outline-success btn-rounded waves-effect"  data-toggle="collapse" data-target="#collapseInfoCandidate<?php echo $usuario_usuarios["id"]?>">
                                        See + info
                                    </button>
                                </div>
                                <div class="col-sm-5">
                                    <a href="?eliminarId=<?php echo $usuario_usuarios["id"]?>" class="verInfo btn btn-outline-danger btn-rounded waves-effect">Delete</a>
                                </div>
                              </div>        
                            </div>
                            <div class="row">
                                <div class="col-12">
                                  <div class="collapse" id="collapseInfoCandidate<?php echo $usuario_usuarios["id"]?>">
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
                                            <li class="list-group-item"><strong>Sessions completed:</strong><?php echo " " . $horas?></li>
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