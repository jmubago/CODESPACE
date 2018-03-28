<?php

// Inicializar sesión
session_start();
 
// Si la variable de sesión está vacía rediriguir a la pantalla de login
if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
  header("location: login.php");
  exit;
}
