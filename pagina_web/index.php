<?php 
include("startApp.php");
$titulo_seccion = "";
$template_seccion = "template/index-root.php";

$sql_productoIndex = "SELECT * FROM `productos` LIMIT 3";
$resultado_productoIndex = mysqli_query($conexion, $sql_productoIndex);

$sql = "SELECT * FROM categorias";
$resultado_categorias = mysqli_query($conexion, $sql);


include ('template/main-root.php');
?>    
 
