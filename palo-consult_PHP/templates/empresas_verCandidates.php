<div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h5>Your candidate´s list</h5>
        </div>
    </div>
    <?php  while ($usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC)){ ?>
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col" class="thWidth">Name</th>
          <th scope="col" class="thWidth">Last name</th>
          <th scope="col" class="thWidth">Email</th>
          <th scope="col" class="thWidth">Coach</th>
          <th scope="col" class="thWidth">Sessions</th>
          <th scope="col" class="thWidth">Report</th>
        </tr>
      </thead>
      
      <tbody>
        
            <?php if ($usuario_usuarios["Horas"] != null){$horas = $usuario_usuarios["Horas"]; $disabled = "active";}else{ $horas = "  Not completed"; $disabled = "disabled";} ?>
                <tr><td><?php echo $usuario_usuarios["Nombre"] ?>
                </td><td><?php echo $usuario_usuarios["Apellido"] ?>
                </td><td><?php echo$usuario_usuarios["EmailContacto"]?>
                </td><td><?php echo $usuario_usuarios["Coach"] . " " . $usuario_usuarios["CoachApellido"]?>
                </td><td><?php echo $horas?>  
                </td><td> <button class="verInfo btn btn-outline-primary btn-rounded waves-effect" type="button" data-toggle="collapse" data-target="#collapseReportCandidate<?php echo $usuario_usuarios["id"]?>" <?php echo $disabled?>>See report</button>
                </td></tr> 
      </tbody>
      
    </table>
    <div class="container mt-3">
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
                                        <li class="list-group-item"><strong>Candidate´s Glassdor rating:</strong> <?php echo $usuario_usuarios["Comentario1"]?></li>
                                        <li class="list-group-item"><strong>Candidate´s strong points:</strong> <?php echo $usuario_usuarios["Comentario2"]?></li>
                                        <li class="list-group-item"><strong>Candidate´s weak points:</strong> <?php echo $usuario_usuarios["Comentario3"]?></li>
                                        <li class="list-group-item"><strong>Other comments:</strong> <?php echo $usuario_usuarios["Comentario4"]?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <?php } ?>
</div>

<div id="Jquery_report_result" class="container mt-3">
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
                                        <li class="list-group-item"><strong>Sessions completed:</strong><?php echo " " . $horas?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>