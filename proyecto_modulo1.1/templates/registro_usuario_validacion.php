
<div class="row">
        <div class="col mt-1 text-center">
            <h5>Valídate primero como Usuario de una Empresa</h5>
        </div>    
    </div>
<div class="container my-5">    
    <form id="validacion" method="post" action="<?php echo $root?>registro_usuario_validacion/registro_OK.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="codigo" class="col-sm-2 col-form-label">Código de empresa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="codigo" placeholder="Escribe el código propocionado por tu empresa">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Valídate</button>
        </div>
      </div> 
    </form>    
</div>



