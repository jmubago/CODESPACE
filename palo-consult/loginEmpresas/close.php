<?php

session_start();
require '../startApp.php';
$titulo = "Home";
$mensaje = "You have successfully closed your Enterprise´s session";
session_unset();
session_destroy();
$template_seccion = "../templates/login.php";


include ("../templates/main.php");
require '../endApp.php';
