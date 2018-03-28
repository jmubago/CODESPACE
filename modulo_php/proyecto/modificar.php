<?php
// incluimos el fichero de configuración
require_once 'config.php';

// Definir variables e inicializarlas con valores vacios
$nombre = $email =  "";
$activo = false;
$nombre_err = $email_err = "";
 
 
// Procesar los datos enviados desde el formulario
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Obtener el valor del campo oculto
    $id = $_POST["id"];
    
    // Validar nombre
    $entrada_nombre = trim($_POST["nombre"]);
    if(empty($entrada_nombre)){
        $nombre_err = "Debes introducir un nombre.";
    } elseif(!filter_var(trim($_POST["nombre"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $nombre_err = 'El nombre introducido no es válido.';
    } else{
        $nombre = $entrada_nombre;
    }
    
    // Validar email
    $entrada_email = trim($_POST["email"]);
    if(empty($entrada_email)){
        $email_err = 'Debes introducir un email.';     
    } else{
        $email = $entrada_email;
    }
    
    //Activo
    if(isset($_POST["activo"]) && !empty($_POST["activo"])){
        $activo = 1; 
    } else {
         $activo = 0;    
    }
    
    
    
   // comprobar que no haya errores
    if(empty($nombre_err) && empty($email_err)){
        // Preparar sentencia
        $sql = "UPDATE usuarios SET nombre=?, email=?, activo=? WHERE id=?";
         
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Enlazar variables como parámetros de la sentencia
            mysqli_stmt_bind_param($stmt, "ssii", $parametro_nombre, $parametro_email, $parametro_activo, $parametro_id);
            
            // Set parameters
            $parametro_nombre = $nombre;
            $parametro_email = $email;
            $parametro_activo = $activo;
            $parametro_id = $id;
            
            // Ejecutar sentencia
            if(mysqli_stmt_execute($stmt)){
                // Todo ok. Redirigir a la página principal
                header("location: index.php");
                exit();
            } else{
                echo "Algo salió mal. Inténtalo de nuevo.";
            }
        }
         
        // Cerrar sentencia
        mysqli_stmt_close($stmt);
    }
    
    //Cerrar conexión
    mysqli_close($link);
} else{
    // Comprobar si existe el id como parametro
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        //Obtener el id
        $id =  trim($_GET["id"]);
        
        // Preparar la sentencia de select
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Enlazar variables con parámetros
            mysqli_stmt_bind_param($stmt, "i", $parametro_id);
            
            // Establecer parámetros
            $parametro_id = $id;
            
            // Ejecutamos la sentencia
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* 
                     * Obtener fila de resultados como un array asociativo.
                     * Como el conjunto de resultados contiene solo una fila, 
                     * no es necesario  utilizar while loop 
                     */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $nombre = $row["nombre"];
                    $email = $row["email"];
                    $activo = $row["activo"];
                } else{
                    // URL no tiene un id válido
                    header("location: error.php");
                    exit();
                }
                
            } else{
                 echo "Oops! Algo no ha ido bien. Inténtelo de nuevo.";
            }
        }
        
        // Cerrar sentencia
        mysqli_stmt_close($stmt);
    }  else{
        // La url no contiene el parametro id. Redirigir a la página principal
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Modificar usuario</h2>
                    </div>
                   
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        
                         <div class="form-group text-left">
                            <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1" <?php echo ($activo==1)?"checked":""?>>
                            <label for="activo">Activo</label>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>