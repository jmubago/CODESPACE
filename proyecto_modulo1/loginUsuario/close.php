<?php

session_start();
require '../startApp.php';
$titulo = "Home";
$mensaje_usuario = "Se ha cerrado tu sesión de Usuario correctamente";
session_unset();
session_destroy();
$template_seccion = "../templates/login_usuario.php";


include ("../templates/main.php");
require '../endApp.php';