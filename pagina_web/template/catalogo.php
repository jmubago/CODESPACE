 <section class="categoriasBBDD">
                <ul>
                    <h3>Categorías</h3>
                    <?php    
                        while($categorias = mysqli_fetch_assoc($resultado_categorias)) {
                            /*esto me saca un array asociativo donde fila:dato y va funcionando hasta que no tenga más registros*/                     
                            echo "<li><a href='$root" . "catalogo/?fkidcategoria=" . $categorias["id"] . "'>{$categorias["nombre"]}</a></li>";
                            /* Añadir un IF para que cuando se acceda a la página CATALOGO al no haber un "fkidcategoria" no nos muestre un error */
                        }
                     ?>
                </ul>
</section> 

<section id="gridProducto">
     <?php 
                        if ($resultado_productos)  { 
                            if(mysqli_num_rows($resultado_productos) > 0){
                    ?>
                            <?php while($productos= mysqli_fetch_assoc($resultado_productos)) { ?>
                            
    <div class="fichaProducto">         
                   
                            <h3><?php echo $productos["nombre"]?></h3>
                            <img src="<?php echo $carpeta_fotos . $productos["fotografia"]?>" alt="">
                            <br>
                            <?php echo $productos["descripcion"]?>
                            <p>
                                <a href="#"  onclick="addCarrito(<?php $productos["precio"]?>)">Comprar</a>
                            </p>
                            <p>
                                <a href="<?php echo $root?>producto/?id=<?php echo $productos["id"]?>"> + info</a>
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