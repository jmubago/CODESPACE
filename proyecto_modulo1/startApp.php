<?php
$root = "/proyecto_modulo1/";

/** CONECTAR A BASE DE DATOS */

$serverName = "localhost"; //serverName\instanceName
$connectionInfo = array( "Database"=>"PaloConsult01", "UID"=>"joseubago", "PWD"=>"1234");
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