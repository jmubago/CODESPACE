

<?php

require "../startApp.php";


//recoger las variables que me vienen por post

$nombre=$_POST["nombre"];
$apellido =$_POST["apellido"];
$email=$_POST["email"];
$password=$_POST["password"];
$telefono=$_POST["telefono"];
$IBAN=$_POST["iban"];
$idioma=$_POST["idiomaSelec"];

    
//Construir la sentencia SQL INSERT con las variables
    $sql = "INSERT INTO [dbo].[Coach] ([Nombre], [Apellido], [EmailContacto], [Clave], [Telefono], [IBAN], [Idioma], [TipoRegistro])"
            . " VALUES('$nombre','$apellido','$email','$password','$telefono','$IBAN','$idioma', 3)";
    
 if(sqlsrv_query($conn,$sql)){

     
     $template_seccion = "../templates/auth/registro.php";
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
 
 
 

    
 

include("../templates/main.php");
require("../endApp.php");