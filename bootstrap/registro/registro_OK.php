El registro se ha completado

<?php

require "../startApp.php";


//recoger las variables que me vienen por post

/*$datos = [
    "nombre" => $_POST["nombre"],
    "email" => $_POST["email"],
    "password" => $_POST["password"], 
];*/

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$password=$_POST["password"];


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
    $sql = "INSERT INTO usuarios(nombre,email,password, activo)"
            . " VALUES('$nombre','$email','$password', 1)";
    
    
 if(mysqli_query($conexion, $sql)){
     /*$id_usuario= mysqli_insert_id($conexion);
     
     $sql = "SELECT * FROM usuarios WHERE id ='$id_usuario'";
     
     $resultado = mysqli_query($conexion, $sql);
     
     if($resultado){
         $_SESSION["nombre"] = mysqli_fetch_assoc($resultado);
     }*/
     
     $template_seccion = "../templates/auth/registro.php";
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
    
 

include("../templates/main.php");
require("../endApp.php");