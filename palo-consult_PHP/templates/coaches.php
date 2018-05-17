
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
        <?php if ($usuario_usuarios["Horas"] != null){$horas = $usuario_usuarios["Horas"];}else{ $horas = "  Not completed";}?>
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
                                    <button class="verInfo btn btn-outline-primary btn-rounded waves-effect"  data-toggle="collapse" data-target="#collapseInfoCandidate<?php echo $usuario_usuarios["id"]?>">
                                        See + info
                                    </button>
                                </div>
                                <div class="col-sm-5 mt-2">
                                    <a href="?eliminarId=<?php echo $usuario_usuarios["id"]?>" class=""><i class="fas fa-ban botton-eliminar"></i></a>
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

<div class="container-fluid mt-5">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-2 text-center" >
            <h4 style="color: black">Are you done with your outplacement service</h4>
            <h5>Maybe it´s time to fill up the candidate´s form</h5>
        </div>
    </div>
</div>
<div class="container-fluid mb-5">
    <div class="row" style="background-color: #FFFFFF">
        <div class="col mt-5 text-center" >
            <div class="btn-group mx-3">
                <button class="btn btn-outline-primary btn-rounded waves-effect anadirUsuario" type="button" data-toggle="collapse" data-target="#collapseFormCandidate" aria-expanded="false" aria-controls="collapseFormCandidate">Candidate´s form</button> 
            </div> 
        </div>
    </div>
</div>

<div class="collapse" id="collapseFormCandidate">
    <div class="col">
      <div class="container my-5">
        <form id="formularioUsuario" method="post" action="<?php echo $root?>loginCoach/mi-cuenta/index.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="candidateFormSelec">Candidate</label>
            <select name="candidateFormSelec" class="form-control">
              <?php
                while ($usuarios_formulario = sqlsrv_fetch_array( $resultado_usuarios_formulario, SQLSRV_FETCH_ASSOC)){ ?>
                    <option value="<?php echo $usuarios_formulario["id"]?>"><?php echo $usuarios_formulario["Nombre"] . " ". $usuarios_formulario["Apellido"]?></option>
              <?php  } ?>
            </select>
          </div>
          <!--<div class="form-group">
            <label for="enterpriseFormSelec">Enterprise</label>
            <select name="candidateFormSelec" class="form-control">
              <?php
                //while ($empresas_formulario = sqlsrv_fetch_array( $resultado_empresas_formulario, SQLSRV_FETCH_ASSOC)){ ?>
                    <option value="<?php //echo $empresas_formulario["id"]?>"><?php //echo $empresas_formulario["RazonSocial"]?></option>
              <?php  //} ?>
            </select>
          </div>-->
          <div class="form-group">
            <label for="hours">Number of hours</label>
            <input type="number" name="hours" class="form-control" placeholder="1, 2, 3, ..."></input>
          </div>
          <div class="form-group">
            <label for="comentario1">Comment 1</label>
            <textarea name="comentario1" class="form-control" placeholder="Comment 01"></textarea>
          </div>
          <div class="form-group">
            <label for="comentario2">Comment 2</label>
            <textarea name="comentario2" class="form-control" placeholder="Comment 02"></textarea>
          </div> 
          <div class="form-group">
            <label for="comentario3">Comment 3</label>
            <textarea name="comentario3" class="form-control" placeholder="Comment 03"></textarea>
          </div>
          <div class="form-group">
            <label for="comentario4">Comment 4</label>
            <textarea name="comentario4" class="form-control" placeholder="Comment 04"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>     

<div class="container my-5"> 
 <?php if(isset($mensaje)){?>
    <div class="alert alert-success" role="alert">
        <?php echo $mensaje?></p>
    </div> 
    <?php } ?>   
  <?php if(isset($mensaje_error)){?>
    <div class="alert alert-danger" role="alert">
        <?php echo $mensaje_error?></p>
    </div> 
    <?php } ?>
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

