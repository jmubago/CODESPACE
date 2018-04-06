

<?php

require "../startApp.php";


//recoger las variables que me vienen por post

/*$datos = [
    "nombre" => $_POST["nombre"],
    "email" => $_POST["email"],
    "password" => $_POST["password"], 
];*/

$razon_social=$_POST["razonSocial"];
$cif =$_POST["cif"];
$actividad=$_POST["actividadSelec"];
$pais=$_POST["paisSelec"];
$direccion=$_POST["direccion"];
$email=$_POST["email"];
$password=$_POST["password"];
$telefono=$_POST["telefono"];
$persona_contacto=$_POST["personaContacto"];
$iban=$_POST["iban"];


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
    $sql = "INSERT INTO [dbo].[Empresa] ([RazonSocial], [CIF], [Actividad], [Pais], [Direccion], [EmailContacto], [Clave], [Telefono], [PersonaContacto], [IBAN], [TipoRegistro])"
            . " VALUES('$razon_social','$cif','$actividad','$pais','$direccion','$email','$password','$telefono','$persona_contacto','$iban', 1)";
    
 if(sqlsrv_query($conn,$sql)){
     /*$id_usuario= mysqli_insert_id($conexion);*/
     
     /*$sql = "SELECT * FROM usuarios";
     
     $resultado = sqlsrv_query($conn, $sql);
     
     if($resultado){
         $_SESSION["nombre"] = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
     }*/
     
     $template_seccion = "../templates/auth/registro.php";
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
 
 
 

    
 

include("../templates/main.php");
require("../endApp.php");