<?php

session_start();
require '../startApp.php';
$titulo = "Home";
$mensaje_empresas = "Se ha cerrado tu sesión de Empresa correctamente";
session_unset();
session_destroy();
$template_seccion = "../templates/login_empresas.php";


include ("../templates/main.php");
require '../endApp.php';
