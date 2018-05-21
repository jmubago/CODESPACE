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
        
        header("Location: mi-cuenta/index.php?password=..");
    }   
}else{
     header("Location: mi-cuenta/index.php?passwordError=..");
}
 
 
 
 

    
 

include("../templates/main.php");
require("../endApp.php");