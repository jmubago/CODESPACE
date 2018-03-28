<style>
    form[name="mas-info"] [type="text"], form[name="mas-info"] textArea {
        width: 60%;
        display: inline-block;
    }
    
    form[name="mas-info"] label {
        display: inline-block;
        width: 10%;
        text-align: right;
        vertical-align: top;
    }
    form[name="mas-info"] > div {
        margin-top:10px;
    }
    
</style>
<section style="margin:0 auto;" >
    
    <div style="margin:0 auto;text-align: center">
        <img src="<?php echo $carpeta_fotos . $producto["fotografia"]?>" style="width: 30%"  alt="<?php echo $producto["nombre"]?>">
        <h1 ><?php echo $producto["nombre"]?></h1>
        <p style="font-size: 1.4rem"><?php echo $producto["precio"]?> €</p>
        <p style="width: 80%;margin:20px auto"><?php echo $producto["descripcion"]?></p>
    </div>
    <hr>
    <div style="margin:50px;text-align: center;">
        <h3>¿Quieres más información sobre <?php echo $producto["nombre"]?>?</h3>
        <p>Rellena el siguiente formulario y recibe toda la información a cerca de <strong><?php echo $producto["nombre"]?></strong></p>
        <br><br>
        <form method="post" action="<?php echo $root?>producto/mas-info.php" name="mas-info">
                
            <div> 
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div> 
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <div> 
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto">
            </div>
            <div>
                <label for="observaciones">Observaciones:</label>
                <textarea name="observaciones" id="observaciones" cols="10" rows="8"></textarea>
            </div>
                <input name="id_producto" type="hidden" value="<?php echo $id_producto?>">
                <input id="latitud" name="latitud" type="hidden" value="">
                <input id="longitud" name="longitud" type="hidden" value="">
            
            <div>
                <input type="submit" value="Enviar">
            </div> 
        </form>
    </div>

    
    
</section>

<section style="text-align: center;margin:50px auto;">
    <h3>Productos relacionados con <?php echo $producto["nombre"]?></h3>
    
    
    <div>
        TODO
    </div>
</section>


<script>
    
    function mostrarPosicion () {
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(okPosicion,errorPosicion);
                } else{
                    alert("Lo sentimos, tu navegador no soporta la geolocalización");
                }
            }
            
            function okPosicion(position) {
                var latitud = position.coords.latitude;
                var longitud = position.coords.longitude;
                
                var elementoLatitud = document.getElementById("latitud");
                var elementoLongitud = document.getElementById("longitud");
                
                elementoLatitud.value = latitud;
                elementoLongitud.value = longitud;
            }
            
            function errorPosicion(error) {
                
            }
    mostrarPosicion ();
</script>