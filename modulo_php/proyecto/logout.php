<?php
// Inicializar sesión
session_start();
 
// Reestablecer todas la variables de sesión
$_SESSION = array();
 
// Destruir sesión
session_destroy();
 
// Redirigir la página de login
header("location: login.php");
exit();
