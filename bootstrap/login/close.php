<h2>Hemos cerrado la sesión</h2>
<?php
session_start();
require '../startApp.php';
$titulo = "Home";
session_unset();
session_destroy();
$template_seccion = "../templates/home.php";


include ("../templates/main.php");
require '../endApp.php';