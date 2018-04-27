<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"];
$template_seccion = "../../templates/coaches.php";


$sql_usuarios = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = " . $_SESSION["coach"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );

$sql_usuarios_libres = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = 22;";
$resultado_usuarios_libres = sqlsrv_query( $conn, $sql_usuarios_libres );


if(empty($_GET)){
}elseif(isset ($_GET["verId"])){
$variableVerId = $_GET["verId"];

$sql_ver_usuarios = "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.id=" . $variableVerId . ";";
$resultado_ver_usuarios = sqlsrv_query( $conn, $sql_ver_usuarios);

}elseif(isset ($_GET["eliminarId"])){
$variableEliminarId = $_GET["eliminarId"];

$sql_eliminar_usuarios = "UPDATE [dbo].[Usuarios] SET Coach = 22 WHERE id = " . $variableEliminarId . ";";
$resultado_eliminar_usuarios = sqlsrv_query( $conn, $sql_eliminar_usuarios);
if($resultado_eliminar_usuarios){
    header("Location: index.php");
}

}else{
$variableAnadirId = $_GET["anadirId"]; 

$sql_anadir_usuarios = "UPDATE [dbo].[Usuarios] SET Coach =" . $_SESSION["coach"]["id"] . "WHERE id =" . $variableAnadirId . ";";
$resultado_anadir_usuarios = sqlsrv_query( $conn, $sql_anadir_usuarios);
if($resultado_anadir_usuarios){
    header("Location: index.php");
}

}


/*if($resultado_usuarios){
    $usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC);
    if ($usuario_usuarios){
        
        $_SESSION["usuario"] = $usuario_usuarios;
    }
}*/






include '../../templates/main.php';
require '../../endApp.php';