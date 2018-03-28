

<div class="videoInicio">
    <h1>Bienvenido a fruity</h1>
    <br>
    <h2>La mejor tienda de frutas online</h2>
</div> 

<section class="producto">
     <?php 
                        if ($resultado_productoIndex)  { 
                            if(mysqli_num_rows($resultado_productoIndex) > 0){
                    ?>
                            <?php while($productos= mysqli_fetch_assoc($resultado_productoIndex)) { ?>
                            
    <div class="producto1">         
                   
                            <h3><?php echo $productos["nombre"]?></h3>
                            <img src="<?php echo $carpeta_fotos . $productos["fotografia"]?>" alt="">
                            <br>
                            <?php echo $productos["descripcion"]?>
                            <p>
                                <a href="#"  onclick="addCarrito()">Comprar</a>
                            </p>
                            <p>
                                <a href="<?php echo $root?>producto/index.php"> + info</a>
                            </p>
                            <br>
     </div>              
                            <?php }?>
                            
                    <?php 
                            } else { ?>
                            <!-- No hay resultados -->
                            <p class="text-center">No hay información disponible sobre esta categoría</p>
                    <?php 
                            }
                    } else { ?>
                            <!-- Se produjo un error al obtener el resultado -->
                            <p class="text-center">Se ha producido un error de conexión, intentelo más tarde</p>
                           
                    <?php }?>
                            
</section>


<div id="carrito">
            <div>
                <h3>Esta es tu compra</h3>
            </div>
            <div>
                <img src="<?php echo $root?>imagenes/carrito.png" alt="carrito">
            </div>
            <div>    
            <p>
            Nº de artículos: <span id="numero">0</span>
            </p>
            <p>    
            Total: <span id="total">0</span> €
            </p> 
            </div>    
</div>  

<!--
 <div id="main">
        <div class="producto">
            <div class="producto1">
                <img src="<?php echo $root?>imagenes/manzana.jpg" alt="manzana">
                <h2>Manzana</h2>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                <a href="#"  onclick="addCarrito(1)">Comprar</a>
                </p>
                <p>
                <a href="<?php echo $root?>producto/index.php">+ info</a>
                </p>
            </div>
            <div class="producto2">
                <img src="<?php echo $root?>imagenes/naranja.jpg" alt="naranja">
                <h2>Naranja</h2>
                <p>Eed et augue nulla. Etiam placerat ut ipsum sed rhoncus. Phasellus tempus luctus odio et molestie. Aliquam erat volutpat.
                </p>
                <p>
                <a href="#"  onclick="addCarrito(2)">Comprar</a>
                </p>
                <p>
                <a href="<?php echo $root?>producto/index.php">+ info</a>
                </p>
            </div>
            <div class="producto3">
                <img src="<?php echo $root?>imagenes/platano.jpg" alt="platano">
                <h2>Plátano</h2>
                <p>Mauris sem dolor, congue vel elit vel, luctus consectetur elit. Maecenas egestas eros varius tempor ornare.
                </p>
                <p>
                <a href="#"  onclick="addCarrito(3)">Comprar</a>
                </p>
                <p>
                <a href="<?php echo $root?>producto/index.php">+ info</a>
                </p>
            </div>
        </div>
        <div id="carrito">
            <div>
                <h3>Esta es tu compra</h3>
            </div>
            <div>
                <img src="<?php echo $root?>imagenes/carrito.png" alt="carrito">
            </div>
            <div>    
            <p>
            Nº de artículos: <span id="numero">0</span>
            </p>
            <p>    
            Total: <span id="total">0</span> €
            </p> 
            </div>    
        </div>  
    </div>
-->