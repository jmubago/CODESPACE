<?php
/**
 * 
 * Conectar con la base de datos y acceder a la tabla que contiene la lista 
 * de usuario realizando un SELECT y listarlos
 * 
 */

define("HOST_BBDD","localhost");
define("USER_BBDD","root");
define("PASS_BBDD","");
define("NAME_BBDD","demo_tienda");

$conexion = mysqli_connect(HOST_BBDD, USER_BBDD, PASS_BBDD, NAME_BBDD);
// Comprobar conexión
if($conexion === false){
    die("ERROR: Error de conexión " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios | Proyecto PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Gestión de usuarios</h2>
                        <a href="#" class="btn btn-success pull-right">Añadir nuevo usuario</a>
                    </div>
                    <?php 
                        if ($resultado)  { 
                        
                            if(mysqli_num_rows($resultado) > 0){
                    ?>
                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Activo</th>
                                <th>Último acceso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php while($usuario=mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><?php echo $usuario["id"]?></td>
                                <td><?php echo $usuario["nombre"]?></td>
                                <td><?php echo $usuario["email"]?></td>
                                <td><?php echo ($usuario["activo"]==1)?"SI":"NO"?></td>
                                <td><?php echo $usuario["ultimo_acceso"]?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            <?php }?>
                            
                        </tbody>                            
                    </table>
                    <?php 
                            } else { ?>
                            <!-- No hay resultados -->
                            <p class="text-center">No hay usuarios disponibles</p>
                    <?php 
                            }
                    } else { ?>
                            <!-- Se produjo un error al obtener el resultado -->
                            <p class="text-center">No se ha podido devolver la lista de usuario, intentelo más tarde</p>
                    <?php }?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php 

    //liberar resultado
    mysqli_free_result($resultado);

    //cerrar conexión
    mysqli_close($conexion);
     