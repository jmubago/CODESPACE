<?php
// Incluimos fichero de configuración de nuestra app
require_once 'config.php';
 
// Definir variables e inicializarlas con valores vacios
$nombre = $email =  $password = $confirm_password = "";
$activo = false;
$nombre_err = $email_err = $password_err = $confirm_password_err = "";
 
// Procesar datos del formulario enviados
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
    
    
    //Validar contraseña
    if(empty(trim($_POST['password']))){
        $password_err = "Debes introducir una contraseña.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "La contraseña de tener al meno 6 caracteres.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validar confirmar password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Debes confirmar la password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Las contraseñas no coinciden.';
        }
    }
    
    //Activo
    if(isset($_POST["activo"]) && !empty($_POST["activo"])){
        $activo = 1; 
    } else {
         $activo = 0;    
    }
  
    
    // Comprobar que no estén vacios antes de insertar
    if(empty($nombre_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        // Preparar la consulta de insert
        $sql = "INSERT INTO usuarios (nombre, email, activo, password) VALUES (?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Enlazar variables para preparar la sentendia como parámetros
            mysqli_stmt_bind_param($stmt, "ssis", $parametro_nombre, $parametro_email, $parametro_activo, $parametro_password);
            
            // Establecer valores a los parámetros
            $parametro_nombre = $nombre;
            $parametro_email = $email;
            $parametro_activo = $activo;
            $parametro_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Comprobar que se ejecute de forma correcta la sentencia
            if(mysqli_stmt_execute($stmt)){
                //Redireccionar a la página principal
                header("location: index.php");
                exit();
            } else{
                echo "Algo salió mal. Inténtalo de nuevo";
            }
        }
         
        // Cerrar sentencia
        mysqli_stmt_close($stmt);
    }
    
    // Cerrar conexión
    mysqli_close($conexion);
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo usuario</title>
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
                        <h2>Nuevo usuario</h2>
                    </div>
                    <!--<p>Please fill this form and submit to add employee record to the database.</p>-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label>Confirma la contraseña</label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>

                        <div class="form-group text-left">
                            <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1">
                            <label for="activo">Activo</label>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>