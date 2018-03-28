<?php

/**
 * Crear un array indexado que contenga todos los usuarios de nuestra aplicaciòn.
 * Mostrar el listado de usuarios usando un bucle
 */

$usuarios = array();


//datos Luis
$usuarios[0] = [
    "id"=>1,
    "nombre"=>"Luis Martín",
    "email"=>"luis@empresa.com",
    "activo"=>true,
    "acceso"=>"12/12/2017"
];


//datos maria
$usuarios[1] = [
    "id"=>2,
    "nombre"=>"María Hernández",
    "email"=>"maria@empresa.com",
    "activo"=>true,
    "acceso"=>"01/03/2016"
];

//datos carlos
$usuarios[2] = [
    "id"=>3,
    "nombre"=>"Carlos Rodriguez",
    "email"=>"carlos@empresa.com",
    "activo"=>true,
    "acceso"=>"05/28/2015"
];

//datos esther
$usuarios[3] = [
    "id"=>4,
    "nombre"=>"Esther Berlanga",
    "email"=>"esther@empresa.com",
    "activo"=>false,
    "acceso"=>"09/02/2014"
];

//datos ana
$usuarios[4] = [
    "id"=>5,
    "nombre"=>"Ana Perez",
    "email"=>"ana@empresa.com",
    "activo"=>true,
    "acceso"=>"06/05/2017"
];

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
                            <?php 
                            foreach ($usuarios as $usuario) {
                            ?>
                            <tr>
                                <td><?php echo $usuario["id"]?></td>
                                <td><?php echo $usuario["nombre"]?></td>
                                <td><?php echo $usuario["email"]?></td>
                                <td><?php echo ($usuario["activo"]?"SI":"NO")?></td>
                                <td><?php echo $usuario["acceso"]?></td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            <?php }?>
  
                        </tbody>                            
                    </table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>