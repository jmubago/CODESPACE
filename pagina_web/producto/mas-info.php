<?php
require "../startApp.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//recoger las variables que me vienen por post

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$observaciones = $_POST["observaciones"];
$id_producto = $_POST["id_producto"];
$latitud = $_POST["latitud"];
$longitud = $_POST["longitud"];
$producto = getProducto($id_producto, $conexion);


//recoger las variables que me vienen por post

$datos = [
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["email"],
    "asunto" => $_POST["asunto"],
    "observaciones" => $_POST["observaciones"],
    "id_producto" => $_POST["id_producto"],
    "latitud" => $_POST["latitud"],
    "longitud" => $_POST["longitud"]
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
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email) NO es válida.";
    die();
}

//Construir la sentencia SQL INSERT con las variables
$resultado = insertarMasInfo(
        $conexion,
        $datos,
        $id_producto,
        $latitud,
        $longitud
        );


//Enviar un email al administrados de la página

$asunto_email = 'Nueva solicitud de mas informacion de ' . $producto["nombre"];
$cuerpo = $nombre . ' con el telefono ' .$telefono . ' te ha enviado un mensaje sobre <b>'. $producto["nombre"] . '</b> con el siguiente cuerpo del mensaje: <br> ' . $observaciones;

enviarEmail ($asunto_email, $cuerpo);

//Mostrar un mensaje al usuario 

$titulo_seccion_h1 = "Confirmación de envio";
$titulo_seccion_h2 = "";
$template_seccion = "../template/mensaje.php";
include ('../template/main.php');

/*
 * print_r($_POST);
 */