<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"];
$template_seccion = "../../templates/coaches.php";


$sql_usuarios = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = " . $_SESSION["coach"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );


$sql_usuarios_libres = "SELECT * FROM [dbo].[Usuarios] WHERE Coach IS null;";
$resultado_usuarios_libres = sqlsrv_query( $conn, $sql_usuarios_libres );





/*if($resultado_usuarios){
    $usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC);
    if ($usuario_usuarios){
        
        $_SESSION["usuario"] = $usuario_usuarios;
    }
}*/






include '../../templates/main.php';
require '../../endApp.php';