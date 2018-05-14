<?php
session_start();
require "../startApp.php";


//recoger las variables que me vienen por post

$oldPassword=$_POST["oldPassword"];
$newPassword=$_POST["newPassword"];
//$foto=$_FILES["foto"]["name"];
$id_usuario=$_SESSION["usuario"]["id"];


//Construir la sentencia SQL INSERT con las variables
if($oldPassword === $_SESSION["usuario"]["Clave"]){  
    $sql = "update [dbo].[Usuarios] set [Clave] = '" . $newPassword . "' where id=" . $id_usuario;
        
    if(sqlsrv_query($conn,$sql)){
     
        $_SESSION["usuario"]["Clave"]=$newPassword;
        $mensaje_password = "Your password has been modified";
        $template_seccion = "modificar_usuario.php";
    }else{
        $mensaje_error = "There has been a problem changing your password. Please try again";
    }
    
}else{
    $mensaje_error = "Please write your current password";
    $template_seccion = "modificar_usuario.php";
}
 
 
 
 

    
 

include("../templates/main.php");
require("../endApp.php");