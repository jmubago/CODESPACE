<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["usuario"]["Nombre"] . " " . $_SESSION["usuario"]["Apellido"];
$template_seccion = "../../templates/usuarios.php";


$sql_usuarios = "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.id=" . $_SESSION["usuario"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );


include '../../templates/main.php';
require '../../endApp.php';