<div class="container">
    <div class="row">
        <div class="col mt-2 text-center">
            <h4 style="color: black">Are you done with your coaching sessions?</h4>
            <h5>Maybe it´s time to fill up the candidate´s form</h5>
        </div>
    </div>
</div>

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
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>