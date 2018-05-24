<?php
session_start();
require "../startApp.php";


//recoger las variables que me vienen por post


$email=$_POST["email"];
$telefono=$_POST["telefono"];
$sobreMi=$_POST["comentario"];
//$foto=$_FILES["foto"]["name"];


//Construir la sentencia SQL INSERT con las variables
    
    $sql = "update [dbo].[Usuarios] set [EmailContacto] = '" . $email . "', [Telefono] = '" . $telefono . "', [SobreMi] = '" . $sobreMi . "' where id =" . $_SESSION["usuario"]["id"];
    
 if(sqlsrv_query($conn,$sql)){
     
     $_SESSION["usuario"]["EmailContacto"]=$email;
     $_SESSION["usuario"]["Telefono"]=$telefono;
     $_SESSION["usuario"]["SobreMi"]=$sobreMi;
     
     header("Location: mi-cuenta/index.php?data=..");
     
 }else{
     $mensaje_datos = "There has been a problem changing your data. Please try again";
 }
 

include("../templates/main.php");
require("../endApp.php");