<?php
// Procesar la operación de eliminación después de la confirmación
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // incluir el fichero de configuración
    require_once 'config.php';
   
    // Preparar la sentencia
    $sql = "DELETE FROM usuarios WHERE id = ?";
    
    if($stmt = mysqli_prepare($conexion, $sql)){
        // Enlazar variables con parámetros de entrada a la sentancia
         echo "aa";
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Establecer valores de parámetros
        $param_id = trim($_POST["id"]);
        
        // Ejecutar la sentencia SQL
        if(mysqli_stmt_execute($stmt)){
            // El registro se eliminó con éxito. Redirigir a la página principal
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Algo salió mal. Inténtelo de nuevo.";
        }
         // Cerrar sentencia
        mysqli_stmt_close($stmt);
    } else {
        echo "Oops! Algo salió mal. Inténtelo de nuevo.";
       // echo mysqli_error($conexion);
    }
     
    //cerrar conexión
    mysqli_close($conexion);
} else{
    // Comprobar que exista el parámetro de URL id
    if(empty(trim($_GET["id"]))){
        // La URL no contiene el id como parametro. Redirigir a la pantalla principal
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Eliminar usuario</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>¿Estás seguro que quieres eliminar al usuario?</p><br>
                            <p>
                                <input type="submit" value="SI" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">NO</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>