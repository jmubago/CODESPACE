<?php

session_start();
require '../startApp.php';
$titulo = "Home";
$mensaje = "Se ha cerrado tu sesión de Empresa correctamente";
session_unset();
session_destroy();
$template_seccion = "../templates/login.php";


include ("../templates/main.php");
require '../endApp.php';
