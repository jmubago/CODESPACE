<?php

require "../startApp.php";



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//recoger las variables que me vienen por post

$datos = [
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["email"],
    "asunto" => $_POST["asunto"],
    "observaciones" => $_POST["observaciones"]  
];
        

//validar las variables. Todas tienen que tener valor.
if ($datos ["nombre"] == '' || 
        $datos ["telefono"] == '' || 
        $datos ["email"] == '' || 
        $datos ["asunto"] == '' || 
        $datos ["observaciones"] == ''){
    die();
}
 //validar que el email sea correcto
if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo (" . $datos["email"] . ") NO es válida.";
    die();
    }
    
 //Construir la sentencia SQL INSERT con las variables

   $resultado = insertarMasInfo(
        $conexion,
        $datos
        );
   
    
 

//Enviar un email al administrados de la página

$asunto_email = 'Nuevo contacto desde la web';
$cuerpo = $datos["nombre"] . ' con el telefono ' . $datos["telefono"] . ' te ha enviado un mensaje con el siguiente cuerpo del mensaje: <br> ' . $datos["observaciones"];

enviarEmail ($asunto_email, $cuerpo);



//Mostrar un mensaje al usuario 


$titulo_seccion_h1 = "Confirmación envio";
$titulo_seccion_h2 = "";
$template_seccion = "../template/mensaje.php";
include ('../template/main.php');
