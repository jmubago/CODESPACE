<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"];
$template_seccion = "../../templates/coaches.php";


//$sql_usuarios = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = " . $_SESSION["coach"]["id"] . ";";
$sql_usuarios = "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.Coach=" . $_SESSION["coach"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );


$sql_usuarios_libres = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = 22;";
$resultado_usuarios_libres = sqlsrv_query( $conn, $sql_usuarios_libres );


$sql_usuarios_formulario= "SELECT * from dbo.Usuarios WHERE Coach=" . $_SESSION["coach"]["id"];
$resultado_usuarios_formulario = sqlsrv_query( $conn, $sql_usuarios_formulario );

$sql_empresas_formulario= "select * from dbo.Empresa";
$resultado_empresas_formulario = sqlsrv_query( $conn, $sql_empresas_formulario );

//Botón PDF
if(isset ($_GET["verId"])){
    $variableVerId = $_GET["verId"];
    $sql_boton="SELECT * FROM dbo.PDF where idUsuario =" . $variableVerId;
    $resultado_boton = sqlsrv_query( $conn, $sql_boton );
    echo $sql_boton;
    if($resultado_boton){
        //echo "    se ha realizado query";
        while ($idUsuario = sqlsrv_fetch_array( $resultado_boton, SQLSRV_FETCH_ASSOC)){
            echo "    se hace el bucle   ";
            //echo "Este es el idUsuario de la tabla PDF:  " . $idUsuario["idUsuario"];
            $idUsuario["id"];
            echo $idUsuario["id"];
            
                if($variableVerId == $idUsuario["idUsuario"]){
                    echo  "  BIENNN  " . $idUsuario["idUsuario"];
                    $disabled= "disabled";
                    //$template_seccion= '../libs/pdf/main.php';
                    header("href=\"http://localhost/palo-consult_PHP/libs/pdf/\"");
                }
        }
    }
}


if(empty($_GET)){
}elseif(isset ($_GET["eliminarId"])){
        $variableEliminarId = $_GET["eliminarId"];

        $sql_eliminar_usuarios = "UPDATE [dbo].[Usuarios] SET Coach = 22 WHERE id = " . $variableEliminarId . ";";
        $resultado_eliminar_usuarios = sqlsrv_query( $conn, $sql_eliminar_usuarios);
        echo $variableEliminarId;
    if($resultado_eliminar_usuarios){
        header("Location: index.php");
    }
}elseif(isset ($_GET["formularioId"])){
    $variableEliminarId = $_GET["formularioId"];
    echo "ID del usuario formulario " . $variableEliminarId;
    
    $sql_usuario_formulario = "";

}elseif (isset ($_GET["anadirId"])){
    $variableAnadirId = $_GET["anadirId"]; 

    $sql_anadir_usuarios = "UPDATE [dbo].[Usuarios] SET Coach =" . $_SESSION["coach"]["id"] . "WHERE id =" . $variableAnadirId . ";";
    $resultado_anadir_usuarios = sqlsrv_query( $conn, $sql_anadir_usuarios);
        if($resultado_anadir_usuarios){

            $sql = "SELECT * FROM [dbo].[Usuarios] WHERE id = " . $variableAnadirId . ";";
            $resultado = sqlsrv_query( $conn, $sql );
            if($resultado){
            $usuario = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC);
                if ($usuario){

                    $_SESSION["usuario"] = $usuario;

                    $nombre = $_SESSION["usuario"]["Nombre"] . " " . $_SESSION["usuario"]["Apellido"];
                    $email = $_SESSION["usuario"]["EmailContacto"];
                    $message = "Hello " . $nombre . " a new Coach has just selected your profile in order to start the outplacement service with you. <br>"
                            . "These are the details from your new Coach: <br><br>" 
                            . "Name: <h4>" . $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"] . "</h4><br>"
                            . "Email: <h4>" . $_SESSION["coach"]["EmailContacto"] . "</h4><br><br>"
                            . "If you want you can either write your assigned Coach or wait for him/her to write to you. <br>"
                            . "Kind regards, <br><br>"
                            . "The Team of Palo Consult";
                    enviarEmail ($email,$message,$nombre);
                    //header("Location: index.php");
                    Header('Location: ' . $_SERVER['PHP_SELF']);
                    //Exit();
                }
            }

        }
}

//Formulario candidato
if(isset ($_POST["candidateFormSelec"])){
    $nombreId=$_POST["candidateFormSelec"];
    $hours =$_POST["hours"];
    $comentario1 =$_POST["comentario1"];
    $comentario2 =$_POST["comentario2"];
    $comentario3 =$_POST["comentario3"];
    $comentario4 =$_POST["comentario4"];

    $sql = "insert into dbo.PDF ([idUsuario], [Horas], [Comentario1], [Comentario2], [Comentario3], [Comentario4])"
            . " values (" . $nombreId . "," . $hours . ",'$comentario1','$comentario2','$comentario3','$comentario4')";
    $resultado = sqlsrv_query( $conn, $sql );


    if($resultado){


        $mensaje = "Candidate´s data has been correctly added";
        //$template_seccion = "../templates/coaches.php";  
    }else{
        $mensaje_error = "Candidate´s data could not be added";
        //$template_seccion = "../templates/coaches.php";
    }
}



include '../../templates/main.php';
require '../../endApp.php';