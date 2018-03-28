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
                                <td>1</td>
                                <td>Luis Martín</td>
                                <td>luis@empresa.com</td>
                                <td>SI</td>
                                <td>12/12/2017</td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>María Hernández</td>
                                <td>maria@empresa.com</td>
                                <td>SI</td>
                                <td>01/03/2016</td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>Carlos Rodriguez</td>
                                <td>carlos@empresa.com</td>
                                <td>SI</td>
                                <td>05/28/2015</td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>4</td>
                                <td>Esther Berlanga</td>
                                <td>esther@empresa.com</td>
                                <td>NO</td>
                                <td>09/02/2014</td>
                                <td>
                                    <a href='#' title='Ver detalles' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                    <a href='#' title='Modificar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                    <a href='#' title='Eliminar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>5</td>
                                <td>Ana Perez</td>
                                <td>ana@empresa.com</td>
                                <td>SI</td>
                                <td>06/05/2017</td>
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