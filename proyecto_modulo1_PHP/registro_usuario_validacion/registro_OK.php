
<?php

require "../startApp.php";


//recoger las variables que me vienen por post


$codigo=$_POST["codigo"];

//validar las variables. Todas tienen que tener valor.
/*if ($datos ["nombre"] == '' || 
        $datos ["email"] == '' || 
        $datos ["password"] == ''){
    die();
}*/

//validar que el email sea correcto
/*if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo (" . $datos["email"] . ") NO es válida.";
    die();
    }*/
    
    
//Construir la sentencia SQL INSERT con las variables
    $sql = "SELECT * FROM [dbo].[Empresa] WHERE [CodigoConfirmacion] = '" . $codigo . "';";
    $resultado_validacion =sqlsrv_query($conn,$sql);
    
    
 if($resultado_validacion){
     /*$id_usuario= mysqli_insert_id($conexion);*/
     
     /*$sql = "SELECT * FROM usuarios";
     
     $resultado = sqlsrv_query($conn, $sql);
     
     if($resultado){
         $_SESSION["nombre"] = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
     }*/
     $idconfirmacion = sqlsrv_fetch_array($resultado_validacion,SQLSRV_FETCH_ASSOC);
     echo $idconfirmacion["RazonSocial"];
     
     
     $template_seccion = "../templates/registro_usuario_validacion_OK.php";
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
 
 
 

    
 

include("../templates/main.php");
require("../endApp.php");