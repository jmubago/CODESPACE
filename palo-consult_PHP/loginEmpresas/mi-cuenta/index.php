<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["empresas"]["RazonSocial"];
$template_seccion = "../../templates/empresas.php";


$sql_usuarios = "select us.id, us.Nombre, us.Apellido, us.EmailContacto,us.Foto, us.[Horas], us.[Comentario1],us.[Comentario2],us.[Comentario3],us.[Comentario4], co.Nombre AS Coach, co.Apellido AS CoachApellido FROM dbo.Usuarios AS us INNER JOIN dbo.Coach AS co ON us.Coach=co.id WHERE idEmpresa = " . $_SESSION["empresas"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );


$sql_empresa = "SELECT * FROM [dbo].[Empresa] WHERE id = " . $_SESSION["empresas"]["id"] . ";";
$resultado_empresa = sqlsrv_query( $conn, $sql_empresa );

if(empty($_GET["empresaButton"])){
    $_GET["empresaButton"]="inicio_1";
}

if(isset($_GET["newCandidate"])){
    $mensaje_empresas="You have succesfully added a new candidate";
}


include '../../templates/main.php';
require '../../endApp.php';