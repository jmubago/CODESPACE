<?php
session_start();
require '../startApp.php';
$template_seccion = "../templates/login_coach.php";

$usuario_email = (isset($_POST["email"])) ? $_POST["email"] : "";
$usuario_password = (isset($_POST["password"])) ? $_POST["password"] : "";

if($usuario_email == '' && $usuario_password == ''){
    die();
}


$sql = "SELECT * FROM [dbo].[Coach] WHERE EmailContacto = '" . $usuario_email . "' AND Clave = '" . $usuario_password . "';";
$resultado = sqlsrv_query( $conn, $sql );

 if($resultado){
    $usuario = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
    if ($usuario){
        
        $_SESSION["coach"] = $usuario;
        //$template_seccion = "bienvenida.php";
        header("Location: mi-cuenta/index.php");
        $template_seccion = "../templates/coaches.php";
    }
    else {
        $error = "Wrong password or email";
        $template_seccion = "../templates/login_coach.php";
    }
}else{
        $error = "Connection error";
        $template_seccion = "../templates/login_coach.php";

}
include '../templates/main.php';
?>



