<?php 

/*print_r($_GET);*/
require("../startApp.php");
$titulo_seccion_h1 = "Catálogo";
$titulo_seccion_h2 = "";
$template_seccion = "../template/catalogo.php";

$sql_categorias = "SELECT * FROM categorias";
$resultado_categorias = mysqli_query($conexion, $sql_categorias);


if(empty($_GET)){
$id_categoria = "";
$sql_productos = "SELECT * FROM productos";
}else{
$id_categoria = $_GET["fkidcategoria"];
$sql_productos = "SELECT * FROM productos where fkidcategoria =" . $id_categoria;
}

$resultado_productos = mysqli_query($conexion, $sql_productos);

include ('../template/main.php');
?>

<!--
include("../startApp.php");
$titulo_seccion_h1 = "Catálogo";
$titulo_seccion_h2 = "";
$template_seccion = "../template/catalogo.php";

$sql_categorias = "SELECT * FROM categorias";
$resultado_categorias = mysqli_query($conexion, $sql_categorias);


if(empty($_GET)){
$id_categoria = "";
$sql_productos = "SELECT * FROM productos";
}else{
$id_categoria = $_GET["fkidcategoria"];
$sql_productos = "SELECT * FROM productos where fkidcategoria =" . $id_categoria;
}

$resultado_productos = mysqli_query($conexion, $sql_productos);

include ('../template/main.php');

include("../startApp.php");
$titulo_seccion_h1 = "Catálogo";
$titulo_seccion_h2 = "";
$template_seccion = "../template/catalogo.php";

$sql_categorias = "SELECT * FROM categorias";
$resultado_categorias = mysqli_query($conexion, $sql_categorias);


if(empty($_GET)){
$id_categoria = "";
$sql_productos = "SELECT * FROM productos";
}elseif (isset ($_GET["fkidcategoria"])){
$id_categoria = $_GET["fkidcategoria"];
$sql_productos = "SELECT * FROM productos where fkidcategoria =" . $id_categoria;
} else {
$id_categoria = $_GET["id"];
$sql_productos = "SELECT * FROM productos where id =" . $id_categoria;
}

$resultado_productos = mysqli_query($conexion, $sql_productos);

include ('../template/main.php');