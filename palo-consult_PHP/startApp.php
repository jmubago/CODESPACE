<?php
$root = "/palo-consult_PHP/";

/** CARGAR LIBRERIAS NECESARIAS PARA NUESTRO PROYECTO */

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';
require 'libs/funciones.php'; 


/** CONECTAR A BASE DE DATOS */

$serverName = "localhost"; //serverName\instanceName
$connectionInfo = array( "Database"=>"PaloConsult01", "UID"=>"joseportatil", "PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

/* 
if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
} 
*/
?>