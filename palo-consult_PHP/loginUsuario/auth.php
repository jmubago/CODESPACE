<?php

session_start();
require '../startApp.php';
$template_seccion = "../templates/login_usuario.php";

$usuario_email = (isset($_POST["email"])) ? $_POST["email"] : "";
$usuario_password = (isset($_POST["password"])) ? $_POST["password"] : "";

if($usuario_email == '' && $usuario_password == ''){
    die();
}

//$sql= "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.EmailContacto = '" . $usuario_email . "' AND us.Clave = '" . $usuario_password . "';"; 
$sql = "SELECT * FROM [dbo].[Usuarios] WHERE EmailContacto = '" . $usuario_email . "' AND Clave = '" . $usuario_password . "';";
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
        
        $_SESSION["usuario"] = $usuario;
        $template_seccion = "bienvenida.php";
    }
    else {
        $error = "Error de autentificación";
        $template_seccion = "../templates/login_usuario.php";
    }
}else{
        $error = "Error de conexión";
        $template_seccion = "../templates/login_usuario.php";

}
   

  

include '../templates/main.php';

?>
