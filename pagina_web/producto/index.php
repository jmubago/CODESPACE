<?php 
require("../startApp.php");
$titulo_seccion_h1 = "Producto";
$titulo_seccion_h2 = "Producto h2";
$template_seccion = "../template/producto.php";

/*$id_producto = "";
$id_producto = $_GET["id"];*/

$id_producto = (isset($_GET["id"]) ? $_GET["id"] : "");
$producto = getProducto($id_producto, $conexion);

if (!$producto){
    die();
}

include ('../template/main.php');
?>  


<!--
include("../startApp.php");
$titulo_seccion_h1 = "Producto";
$titulo_seccion_h2 = "Producto h2";
$template_seccion = "../template/producto.php";

$id_producto = "";
$id_producto = $_GET["id"];

$sql = "SELECT p.*, c.nombre as categoria 
        FROM productos p 
            INNER JOIN categorias c 
                ON p.fkidcategoria = c.id 
                WHERE p.id=" . $id_producto;
$resultado_producto = mysqli_query($conexion, $sql);

$producto = mysqli_fetch_assoc($resultado_producto);



include ('../template/main.php');
