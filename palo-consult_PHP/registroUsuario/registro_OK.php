
<?php

require "../startApp.php";


//recoger las variables que me vienen por post


$nombre=$_POST["nombre"];
$apellido =$_POST["apellido"];
$email=$_POST["email"];
$password=$_POST["password"];
$telefono=$_POST["telefono"];
$idioma=$_POST["idiomaSelec"];
$empresa=$_POST["empresaSelec"];
//$foto=$_FILES["foto"]["name"];

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
    $sql = "INSERT INTO [dbo].[Usuarios] ([Nombre], [Apellido], [EmailContacto], [Clave], [Telefono], [Idioma], [idEmpresa], [TipoRegistro], [Coach], [SobreMi], [Foto])"
            . " VALUES('$nombre','$apellido','$email','$password','$telefono','$idioma','$empresa', 2,22, 'Hello, soon I will write about me so you can know me a bit better', 'default.jpg')";
    
    
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