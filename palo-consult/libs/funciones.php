<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function enviarEmail ($email,$message,$nombre,$subject) {

   $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
   try {
       //Server settings
       $mail->SMTPDebug = 0;                                 // Enable verbose debug output
       $mail->isSMTP();                                      // Set mailer to use SMTP
       $mail->Host = gethostbyname('smtp.gmail.com');
       //$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
       $mail->SMTPAuth = true;                               // Enable SMTP authentication
       $mail->Username = 'paloconsultcodespace@gmail.com';                 // SMTP username
       $mail->Password = 'PCinfo01';                           // SMTP password
       $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
       $mail->Port = 587;    

      $mail->SMTPOptions = array(
                       'ssl' => array(
                           'verify_peer' => false,
                           'verify_peer_name' => false,
                           'allow_self_signed' => true
                       )
                   );

       //Recipients
       $mail->setFrom('paloconsultcodespace@gmail.com', 'Palo Consult');
       $mail->addAddress($email, $nombre);     // Add a recipient

       //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

       //Content
       $mail->isHTML(true);                                  // Set email format to HTML
       $mail->Subject = $subject;
       $mail->Body    = $message;
       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       $mail->send();
       //echo 'Mensaje enviado con exito';
   } catch (Exception $e) {
       echo 'El mensaje no se ha podido enviar. Mailer Error: ', $mail->ErrorInfo;
   }
}



/**
 *  Devuelve un producto de BBDD a partir de un id
 * 
 * @param type $id_producto
 * @param type $conexion
 * @return type
 */

function getProducto($id_producto, $conexion){
   
    if($id_producto != ''){
    
    $sql = "SELECT p.*, c.nombre as categoria 
        FROM productos p 
            INNER JOIN categorias c 
                ON p.fkidcategoria = c.id 
    WHERE p.id=" . $id_producto;
    
    }
    
    
    // $sql = "SELECT * FROM productos WHERE id = $id_producto";
    $resultado = mysqli_query($conexion, $sql);
    $producto = mysqli_fetch_assoc($resultado);
    return $producto;
}