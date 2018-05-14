<?php
session_start();
require "../startApp.php";

//recoger las variables que me vienen por post


$foto=$_FILES["foto"]["name"];


//Construir la sentencia SQL INSERT con las variables
    
    $sql = "update [dbo].[Usuarios] set [Foto] = '" . $foto . "' where id =" . $_SESSION["usuario"]["id"];
    
 if(sqlsrv_query($conn,$sql)){
    
     $_SESSION["usuario"]["Foto"]=$foto;
     
     $mensaje_foto = "Your photo has been modified";
     $template_seccion = "modificar_usuario.php";
 }else{
     $mensaje_foto = "There has been a problem changing your photo. Please try again";
 }
 
 

    
 

include("../templates/main.php");
require("../endApp.php");