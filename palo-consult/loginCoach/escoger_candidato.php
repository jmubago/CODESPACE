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
     $registro_usuario = "algo";
     $template_seccion = "../templates/auth/registro_usuario.php";
 }else{
     $template_seccion = "../templates/auth/error_registro.php";
 }
 
 //Enviar un email al administrados de la página
 
 $subject = $nombre . " " . $apellido . " you have been added to Palo Consult";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = "Hello " . $nombre . " " . $apellido . " you have just just been added to our system at Palo Consult, so you can now start enjoying our Outplacement service. Please, be patient until you are assigned one of our Coachs. <br>"
            . "For login in please use the following information: <br><br>" 
            . "Email address: " . $email . "<br>"
            . "Password: " . $password . "<br><br>"
            . "Please, go to <a href=\"http://localhost/palo-consult_PHP/login/index.php\">this login</a>, enter into your account and change you personal data and login information. <br>"
            . "Kind regards";

//echo "This is the email is being sent to: " . $email;
//echo " This is the name to whom is being sent to: " . $nombre;
//echo " This is the message is being sent: " . $message;

//$subject = $nombre . " " . $apellido . " a Coach has selected you";




echo $subject;

enviarEmail ($email,$message,$nombre,$subject);
    


include("../templates/main.php");
require("../endApp.php");