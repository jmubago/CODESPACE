<?php
require 'startApp.php';
header('Content-Type: application/json');

if (isset($_POST["nombre"]))
{
  $item = $_POST["nombre"];
  
} 
else 
{
  $item = null; 
}

$sqlAdd = "INSERT INTO  tarea (tarea) VALUES ('" . $item . "');";
$result = mysqli_query($conexion, $sqlAdd);

echo json_encode(array("id"=>mysqli_insert_id($conexion),"tarea"=>$_POST["nombre"]));