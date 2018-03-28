<?php
// Incluir configuración
require_once 'config.php';
 
// Definir variables y establecerlas vacias
$usuario = $password = "";
$usuario_err = $password_err = "";
 
// Procesando el formulario de login
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Comprobar que no sea vacio el nombre de usuario
    if(empty(trim($_POST["usuario"]))){
        $usuario_err = 'Debes introducir un email';
    } else{
        $usuario = trim($_POST["usuario"]);
    }
    
    // Comprobar que la contraseña no sea vacía
    if(empty(trim($_POST['password']))){
        $password_err = 'Debes introducir una contraseña';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validar 
    if(empty($usuario_err) && empty($password_err)){
        // Preparar sentencia
        $sql = "SELECT email, password FROM usuarios WHERE email = ? AND activo=1";
        
        if($stmt = mysqli_prepare($conexion, $sql)){
            // enlazar variable con parámetros de entrada
            mysqli_stmt_bind_param($stmt, "s", $param_usuario);
            
            // añadir parámetro
            $param_usuario = $usuario;
            
            // Ejecutar la sentencia
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Comprobar si el usuario existe
                if(mysqli_stmt_num_rows($stmt) == 1){    
                    // Enlazar variables
                    mysqli_stmt_bind_result($stmt, $usuario, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Contraaseña correcta. Añadir el usuario a la sesión */
                            session_start();
                            $_SESSION['usuario'] = $usuario;  
                            //actualizamos el campo de último acceso
                            $sql_acceso = "UPDATE usuarios set ultimo_acceso=NOW() WHERE email=?";
                            if($stmt_acceso = mysqli_prepare($conexion, $sql_acceso)){
                                mysqli_stmt_bind_param($stmt_acceso, "s", $param_usuario);
                                $param_usuario = $usuario;
                                mysqli_stmt_execute($stmt_acceso);
                            }
                            
                            header("location: index.php");
                        } else{
                            //Mostrar error de contraseña no valida
                            $password_err = 'La contraseña introducida no es válida.';
                        }
                    }
                } else{
                    // Mostrar error de usuario no exitente
                    $usuario_err = 'El nombre de usuario introducido no existe.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
             // Cerrar sentencia
            mysqli_stmt_close($stmt);
        }

    }
    
    // Cerrar conexión
    mysqli_close($conexion);
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px;margin:0 auto; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acceso</h2>
        <p>Introduce usuario y contraseña.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($usuario_err)) ? 'has-error' : ''; ?>">
                <label>Usuario</label>
                <input type="text" name="usuario" class="form-control" value="<?php echo $usuario; ?>">
                <span class="help-block"><?php echo $usuario_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>    
</body>
</html>