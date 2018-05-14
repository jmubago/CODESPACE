
<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["empresas"]["RazonSocial"];
$template_seccion = "../../templates/empresas.php";


//$sql_usuarios = "SELECT * FROM [dbo].[Usuarios] WHERE idEmpresa = " . $_SESSION["empresas"]["id"] . ";";
$sql_usuarios = "select us.Nombre, us.Apellido, us.EmailContacto, co.Nombre AS Coach, co.Apellido AS CoachApellido FROM dbo.Usuarios AS us INNER JOIN dbo.Coach AS co ON us.Coach=co.id WHERE idEmpresa = " . $_SESSION["empresas"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );




$sql_empresa = "SELECT * FROM [dbo].[Empresa] WHERE id = " . $_SESSION["empresas"]["id"] . ";";
$resultado_empresa = sqlsrv_query( $conn, $sql_empresa );


/*if($resultado_usuarios){
    $usuario_usuarios = sqlsrv_fetch_array( $resultado_usuarios, SQLSRV_FETCH_ASSOC);
    if ($usuario_usuarios){
        
        $_SESSION["usuario"] = $usuario_usuarios;
    }
}*/






include '../../templates/main.php';
require '../../endApp.php';








