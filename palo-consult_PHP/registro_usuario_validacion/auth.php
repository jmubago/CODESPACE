<?php

require '../startApp.php';


$usuario_codigo = (isset($_POST["codigo"])) ? $_POST["codigo"] : "";

if($usuario_codigo == ''){
    die();
}

$codigo=$_POST["codigo"];

$sql = "SELECT * FROM [dbo].[Empresa] WHERE [CodigoConfirmacion]=" . $codigo . ";";
$resultado_codigo = sqlsrv_query( $conn, $sql );

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

 if($resultado_codigo){
    $usuario_codigo = sqlsrv_fetch_array( $resultado_codigo, SQLSRV_FETCH_ASSOC);
    if ($resultado_codigo){
        
        $template_seccion = "../templates/registro_usuario_validacion_OK.php";
    }
    else {
        $error = "Error de autentificación";
        $template_seccion = "../templates/login_coach.php";
    }
}else{
        $error = "Error de conexión";
        $template_seccion = "../templates/login_coach.php";

}
include '../templates/main.php';
?>
