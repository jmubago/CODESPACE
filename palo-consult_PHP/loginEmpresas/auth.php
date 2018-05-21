<?php
session_start();
require '../startApp.php';
$template_seccion = "../templates/login_empresas.php";

$usuario_email = (isset($_POST["email"])) ? $_POST["email"] : "";
$usuario_password = (isset($_POST["password"])) ? $_POST["password"] : "";

if($usuario_email == '' && $usuario_password == ''){
    die();
}


$sql = "SELECT * FROM [dbo].[Empresa] WHERE EmailContacto = '" . $usuario_email . "' AND Clave = '" . $usuario_password . "';";
$resultado = sqlsrv_query( $conn, $sql );

/*
 if( $resultado === false) {
 
    echo "Error en la query";
    die( print_r( sqlsrv_errors(), true) );
}else{
while( $row = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC))  
{  
    echo "Imprimir nombre";
      echo $row['id'];  
}  }
*/

 
 if($resultado){
    $usuario = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
    if ($usuario){
        
        $_SESSION["empresas"] = $usuario;
        $template_seccion = "bienvenida.php";
    }
    else {
        $error = "Wrong password or email";
        $template_seccion = "../templates/login_empresas.php";
    }
}else{
        $error = "Connection error";
        $template_seccion = "../templates/login_empresas.php";

}
   



  

include '../templates/main.php';

?>