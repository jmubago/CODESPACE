<?php
session_start();
require '../startApp.php';


if (isset($_SESSION["nombre"])){
    
    $template_seccion = "../templates/auth/mi-cuenta.php";
    $titulo = "Mi cuenta";
}else{
    $titulo = "Login";
    $error = "Debe iniciar sesión";
    $template_seccion = "../template/login.php";
}

include ('../templates/main.php');
require '../endApp.php';