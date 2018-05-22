<div class="container">
    <div class="row ">
        <div class="col mt-2 text-center">
            <h4 style="color: black">Your candidates</h4>
            <h5>These people will vouch for your</h5>
        </div>
    </div>
    <div class="row ">
        <?php  while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){ ?>
        <?php if ($usuario_usuarios["Horas"] != null){$horas = $usuario_usuarios["Horas"]; $disabled = "active";}else{ $horas = "  Not completed"; $disabled = "disabled";} ?>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3" align="center">    
                <div class="card" style="width: 30rem;" align="left">
                  <img class="card-img-top" src="<?php echo $root ?>media/fotoUsuarios/<?php echo $usuario_usuarios["Foto"]?>" alt="<?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"]?>">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Name:</strong> <?php echo $usuario_usuarios["Nombre"] . " " . $usuario_usuarios["Apellido"]?></li>
                      <li class="list-group-item"><strong>Email:</strong> <?php echo $usuario_usuarios["EmailContacto"]?></li>
                      <li class="list-group-item"><strong>Coach:</strong> <?php echo $usuario_usuarios["Coach"]?></li>
                      <li class="list-group-item"><strong>Sessions:</strong> <?php echo $horas?></li>
                  </ul>
                  <div class="card-body">
                    <button class="verInfo btn btn-outline-success btn-rounded waves-effect" type="button" data-toggle="collapse" data-target="#collapseReportCandidate<?php echo $usuario_usuarios["id"]?>" <?php echo $disabled?>>See report</button>
                  </div>
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
                                        <li class="list-group-item"><strong>Sessions completed:</strong> <?php echo " " . $horas?></li>
                                        <li class="list-group-item"><strong>Company perception:</strong> <?php echo $usuario_usuarios["Comentario1"]?></li>
                                        <li class="list-group-item"><strong>Candidate´s strong points:</strong> <?php echo $usuario_usuarios["Comentario2"]?></li>
                                        <li class="list-group-item"><strong>Candidate´s weak points:</strong> <?php echo $usuario_usuarios["Comentario3"]?></li>
                                        <li class="list-group-item"><strong>Other comments:</strong> <?php echo $usuario_usuarios["Comentario4"]?></li>
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