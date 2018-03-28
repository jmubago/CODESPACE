<?php
// Comprobar que se está enviando el parametro id
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // incluimo el fichero de configuración
    require_once 'config.php';
    
    // Peparar la sentencia select
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    
    if($stmt = mysqli_prepare($conexion, $sql)){
        // Enlazar variables con la sentencia
        mysqli_stmt_bind_param($stmt, "i", $parametro_id);
        
        // Establacer parametros
        $parametro_id = trim($_GET["id"]);
        
        // Ejecutar sentencia
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Asocamos el resultado */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $nombre = $row["nombre"];
                $email = $row["email"];
                $activo = $row["activo"];
            } else{
                // La url no contiene un id valido.Redirigr a la página de error
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Algo no ha ido bien. Inténtelo de nuevo.";
        }
    }
     
    // Cerramos la sentencia
    mysqli_stmt_close($stmt);
} else{
    // La url no contiene un id valido.Redirigr a la página de error
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de usuario</title>
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
                        <h1>Detalle de usuario</h1>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <p class="form-control-static"><?php echo $row["nombre"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Activo</label>
                        <p class="form-control-static"><?php echo ($row["activo"]==1) ?"SI":"NO"; ?></p>
                    </div>
                      <div class="form-group">
                        <label>Último Acceso</label>
                        <p class="form-control-static"><?php echo $row["ultimo_acceso"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Volver</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>