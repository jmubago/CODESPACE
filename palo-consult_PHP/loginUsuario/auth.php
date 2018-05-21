<?php

session_start();
require '../startApp.php';
$template_seccion = "../templates/login_usuario.php";

$usuario_email = (isset($_POST["email"])) ? $_POST["email"] : "";
$usuario_password = (isset($_POST["password"])) ? $_POST["password"] : "";

if($usuario_email == '' && $usuario_password == ''){
    die();
}

$sql = "SELECT * FROM [dbo].[Usuarios] WHERE EmailContacto = '" . $usuario_email . "' AND Clave = '" . $usuario_password . "';";
$resultado = sqlsrv_query( $conn, $sql );
echo $resultado;


 if($resultado){
    $usuario = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
    if ($usuario){
        
        $_SESSION["usuario"] = $usuario;
        header("Location: mi-cuenta/index.php");
        $template_seccion = "../templates/usuarios.php";
    }
    else {
        $error = "Wrong password or email";
        $template_seccion = "../templates/login_usuario.php";
    }
}else{
        $error = "Connetion error";
        $template_seccion = "../templates/login_usuario.php";
}

include '../templates/main.php';

?>
