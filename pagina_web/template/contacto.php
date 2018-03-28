<style>
    * {
        box-sizing: border-box;
    }
    form[name="contacto"] [type="text"], form[name="contacto"] textArea {
        width: 100%;
        display: block;
        padding:10px;
        border: 1px solid #ccc;
      
    }
    
   
    form[name="contacto"] > div {
        margin-top:10px;
    }
    
    .contacto {
        width: 75%;
        float:left;
        padding: 20px;
    }
    
    .contacto-datos {
        width: 25%;
        float:left;
        padding: 20px;
    }
    
    .contacto-mapa {
        clear: both;
        padding: 20px;
    }
    
    .contacto-datos ul {
      list-style-type: none;
      padding:0px;
    }
    
    .contacto-datos ul li {
        padding-top:20px;
    }
    
     #mapa {
        width: 100%;
        height: 350px;
    }
    
</style>

<section class="contacto">
    
    <h2>Rellena el siguiente formulario si deseas contactar con nosotros</h2>
    <p>
        Proin laoreet gravida arcu, non vestibulum nulla iaculis vel. 
        Pellentesque a lacus id justo rutrum vulputate eget sit amet sapien. 
        In hac habitasse platea dictumst. Fusce scelerisque ut enim sed porttitor.
    </p>
    
    <form method="post" action="<?php echo $root?>contacto/mas-info.php" name="contacto">
        <div> 
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        
        <div> 
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
        </div>
        
        <div> 
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        
        <div>
            <input type="text" name="asunto" id="asunto" placeholder="Asunto">
        </div>
        
        <div>
            <textarea name="observaciones" id="observaciones" cols="10" rows="8" placeholder="Observaciones"></textarea>
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>


    </form>
</section>
<div class="localizacion">
            <p>
                Teléfono: 900000000 
            </p>
            <p>
                Email: contacto@fruity.com
            </p>
            <p>
                Dónde estamos:
            </p> 
            <a href="https://www.google.es/maps/@36.7177868,-4.4334893,18.54z" target="_blank"><img src="../imagenes/plano.JPG" alt="plano"></a>
            
           
</div>

<section class="contacto_mapa">
    
    <div id="map">
        
    </div>
</section>

 