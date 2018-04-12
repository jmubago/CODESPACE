<?php
require 'startApp.php';

$id=$_POST["id"];

$sqlDelete = "DELETE FROM tarea WHERE id = $id ";
$result = mysqli_query($conexion, $sqlDelete);