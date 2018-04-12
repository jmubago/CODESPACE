<?php
$root = "/todolist/";

define("HOST_BBDD","localhost");
define("USER_BBDD","root");
define("PASS_BBDD","");
define("NAME_BBDD","jquery");

$conexion = mysqli_connect(HOST_BBDD, USER_BBDD, PASS_BBDD, NAME_BBDD);
// Comprobar conexión
if($conexion === false){
    die("ERROR: Error de conexión " . mysqli_connect_error());
}else{
    
}
// Solucionamos el problema de los acentos en español (bbdd latin_swedish)
if (!$conexion->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conexion->error);
    exit();
 } 