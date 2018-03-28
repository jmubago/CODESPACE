<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $titulo?></title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/codespace.css" rel="stylesheet" type="text/css">
<script src="js/main.js" type="text/javascript"></script>

<body>
	<div id="header">
		<div class="logo"></div>
		<div class="titulo">Introducción al desarrollo web</div>
		<div class="right">
			<span class="code">PHP</span> <span class="instructor">Juan Alarcón</span>
		</div>
                
                
                <div class="topnav" id="myTopnav">
                     <a href="index.php" style="margin-top:40px;">01.inicio</a>
                    <?php 
                        //mostramos el memú
                    $menu = getMenu();
                    
                   
                    foreach($menu as $opcion) { 

                        if( intval(substr($opcion, 0,2)) !=0) {
                        ?>
                        <a href="<?php echo $opcion ?>"><?php echo $opcion?></a>
                    <?php 
                   
                        }
                        } ?>
                   
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
	</div>


