<?php
   /*Luisiño*/
    $idLuis = '1';
    $nombreLuis = 'Luis Martín';
    $emailLuis = 'luis@empresa.com';
    $activoLuis = true;
    $accesoLuis = '12/12/2017';

    /*Maruxa Hernandez*/
    $idMaria = '2';
    $nombreMaria = 'María Hernández';
    $emailMaria = 'maria@empresa.com';
    $activoMaria = true;
    $accesoMaria = '01/03/2016';

    /*Carliños*/
    $idCarlos = '3';
    $nombreCarlos = 'Carlos Rodriguez';
    $emailCarlos = 'carlos@empresa.com';
    $activoCarlos = true;
    $accesoCarlos = '05/28/2015';

    /*Esther*/
    $idEsther = '4';
    $nombreEsther  = 'Esther Berlanga';
    $emailEsther  = 'esther@empresa.com';
    $activoEsther  = false;
    $accesoEsther  = '09/02/2014';

    /*Ana*/
    $idAna = '5';
    $nombreAna = 'Ana Perez';
    $emailAna = 'ana@empresa.com';
    $activoAna = true;
    $accesoAna = '06/05/2017';

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
                                <td><?php echo $idLuis;?></td>
                                <td><?php echo $nombreLuis;?></td>
                                <td><?php echo $emailLuis;?></td>
                                <td><?php echo ($activoLuis) ? "SI":"NO";?></td>
                                <td><?php echo $accesoLuis;?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $idMaria;?></td>
                                <td><?php echo $nombreMaria;?></td>
                                <td><?php echo $emailMaria;?></td>
                                <td><?php echo ($activoMaria) ? "SI":"NO";?></td>
                                <td><?php echo $accesoMaria;?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $idCarlos;?></td>
                                <td><?php echo $nombreCarlos;?></td>
                                <td><?php echo $emailCarlos;?></td>
                                <td><?php echo ($activoCarlos) ? "SI":"NO";?></td>
                                <td><?php echo $accesoCarlos;?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $idEsther;?></td>
                                <td><?php echo $nombreEsther;?></td>
                                <td><?php echo $emailEsther;?></td>
                                <td><?php echo ($activoEsther) ? "SI":"NO";?></td>
                                <td><?php echo $accesoEsther;?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><?php echo $idAna;?></td>
                                <td><?php echo $nombreAna;?></td>
                                <td><?php echo $emailAna;?></td>
                                <td><?php echo ($activoAna) ? "SI":"NO";?></td>
                                <td><?php echo $accesoAna;?></td>
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