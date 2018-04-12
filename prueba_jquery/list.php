<?php
require 'startApp.php';
//Cabecera para interpretar los datos que recibimos en formato json (de lo contrario es plain txt)
header('Content-Type: application/json');
//Consulta a bbdd
$sqlList = "SELECT * FROM `tarea`";
//ejecutamos la consulta
$result = mysqli_query($conexion, $sqlList);
//Creamos un array vacío para recorrerlo
$resultado = array();
//bucle que recorre el resultado de la ejecucion de la consulta y lo guardo en un array nuevo ($tareas)
while($tareas = $result->fetch_assoc()){
    //Para cada resultado, recibo un array asociativo con la clave y valor de una fila y lo meto en el array vacío ($resultado)
    array_push($resultado,array('id'=>$tareas['id'], 'tarea'=>$tareas['tarea']));
}
//Codificamos el $resultado en json y lo mostramos por pantalla
echo json_encode($resultado);

//por defecto, al llamar por ajax a este archivo, se devuelve una respuesta
//con el contenido de $resultado, en formato json - array


