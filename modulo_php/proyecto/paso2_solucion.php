<?php

/**
 * Crear variables necesarias por cada usuario para que cada campo de la lista
 * de usuarios y mostrarlas donde corresponda
 * 
 * 
 * 
 * 
 * 
 * 
 */

//datos de luis
$id_luis = 5;
$nombre_luis = "Luis Martín";
$email_luis ="luis@empresa.com";
$activo_luis =true;
$acceso_luis = "12/12/2017";

//datos maria
$id_maria = 2;
$nombre_maria = "María Hernández";
$email_maria ="maria@empresa.com";
$activo_maria =true;
$acceso_maria = "01/03/2016";

//datos carlos
$id_carlos = 3;
$nombre_carlos = "Carlos Rodriguez";
$email_carlos ="carlos@empresa.com";
$activo_carlos =true;
$acceso_carlos = "05/28/2015";

//datos esther
$id_esther = 4;
$nombre_esther = "Esther Berlanga";
$email_esther ="esther@empresa.com";
$activo_esther =false;
$acceso_esther = "09/02/2014";

//datos ana
$id_ana = 5;
$nombre_ana = "Ana Perez";
$email_ana ="ana@empresa.com";
$activo_ana =true;
$acceso_ana = "06/05/2017";



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios | Proyecto PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Gestión de usuarios</h2>
                        <a href="#" class="btn btn-success pull-right">Añadir nuevo usuario</a>
                    </div>

                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Activo</th>
                                <th>Último acceso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><?php echo $id_luis?></td>
                                <td><?php echo $nombre_luis?></td>
                                <td><?php echo $email_luis?></td>
                                <td><?php echo ($activo_luis) ? "SI":"NO"?></td>
                                <td><?php echo $acceso_luis?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $id_maria?></td>
                                <td><?php echo $nombre_maria?></td>
                                <td><?php echo $email_maria?></td>
                                <td><?php echo ($activo_maria) ? "SI":"NO"?></td>
                                <td><?php echo $acceso_maria?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $id_carlos?></td>
                                <td><?php echo $nombre_carlos?></td>
                                <td><?php echo $email_carlos?></td>
                                <td><?php echo ($activo_carlos) ? "SI":"NO"?></td>
                                <td><?php echo $acceso_carlos?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $id_esther?></td>
                                <td><?php echo $nombre_esther?></td>
                                <td><?php echo $email_esther?></td>
                                <td><?php echo ($activo_esther) ? "SI":"NO"?></td>
                                <td><?php echo $acceso_esther?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $id_ana?></td>
                                <td><?php echo $nombre_ana?></td>
                                <td><?php echo $email_ana?></td>
                                <td><?php echo ($activo_ana) ? "SI":"NO"?></td>
                                <td><?php echo $acceso_ana?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                          
                            
                        </tbody>                            
                    </table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>