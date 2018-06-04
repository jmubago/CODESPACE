
<?php
session_start();
require "../startApp.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//recoger las variables que me vienen por post
$nombre=$_POST["nombre"];
$apellido =$_POST["apellido"];
$email=$_POST["email"];
$password=$_POST["password"];
$telefono=$_POST["telefono"];
$idioma=$_POST["idiomaSelec"];
$empresa=$_POST["empresaSelec"];
//$foto=$_FILES["foto"]["name"];

    
//Construir la sentencia SQL INSERT con las variables
    $sql = "INSERT INTO [dbo].[Usuarios] ([Nombre], [Apellido], [EmailContacto], [Clave], [Telefono], [Idioma], [idEmpresa], [TipoRegistro], [Coach], [SobreMi], [Foto])"
            . " VALUES('$nombre','$apellido','$email','$password','$telefono','$idioma','$empresa', 2,22, 'Hello, soon I will write about me so you can know me a bit better', 'default.jpg')";
    
    
 if(sqlsrv_query($conn,$sql)){

    header("Location: ../loginEmpresas/mi-cuenta/index.php?newCandidate=..");
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
 
 //Enviar un email al administrados de la página
 
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = "Hello " . $nombre . " " . $apellido . " you have just just been added to our system at Palo Consult, so you can now start enjoying our Outplacement service. Please, be patient until one of our Coachs reaches you through email. <br>"
            . "For login in please use the following information: <br><br>" 
            . "Email address: " . $email . "<br>"
            . "Password: " . $password . "<br><br>"
            . "Please, go to <a href=\"http://localhost/palo-consult/login/index.php\">this login</a>, enter into your account and change you personal data and login information. <br>"
            . "Kind regards";

$subject = $nombre . " " . $apellido . " you have been added to Palo Consult";
enviarEmail ($email,$message,$nombre,$subject);
    
include("../templates/main.php");
require("../endApp.php");