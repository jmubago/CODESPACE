<?php
session_start();
require "../../startApp.php";
$titulo = $_SESSION["coach"]["Nombre"] . " " . $_SESSION["coach"]["Apellido"];
$template_seccion = "../../templates/coaches.php";


$sql_usuarios_libres = "SELECT * FROM [dbo].[Usuarios] WHERE Coach = 22;";
$resultado_usuarios_libres = sqlsrv_query( $conn, $sql_usuarios_libres );


$sql_usuarios_formulario= "SELECT * from dbo.Usuarios WHERE Coach=" . $_SESSION["coach"]["id"];
$resultado_usuarios_formulario = sqlsrv_query( $conn, $sql_usuarios_formulario );

$sql_empresas_formulario= "select * from dbo.Empresa";
$resultado_empresas_formulario = sqlsrv_query( $conn, $sql_empresas_formulario );

$sql_usuarios = "SELECT us.[id], us.[Nombre], us.[Apellido], us.[EmailContacto], us.[Clave], us.[Telefono], us.[SobreMi], us.[Foto], us.[Horas], idi.[Idioma], em.[RazonSocial] AS Empresa, co.[Nombre] AS Coach FROM [dbo].[Usuarios] AS us INNER JOIN [dbo].[Idioma] AS idi ON us.Idioma = idi.id INNER JOIN [dbo].[Empresa] AS em ON us.idEmpresa = em.id INNER JOIN [dbo].[Coach] AS co ON us.Coach = co.id WHERE us.Coach=" . $_SESSION["coach"]["id"] . ";";
$resultado_usuarios = sqlsrv_query( $conn, $sql_usuarios );


if(empty($_GET)){
    $_GET["coachButton"]="inicio";
}elseif(isset ($_GET["eliminarId"])){
        $variableEliminarId = $_GET["eliminarId"];

        $sql_eliminar_usuarios = "UPDATE [dbo].[Usuarios] SET Coach = 22 WHERE id = " . $variableEliminarId . ";";
        $resultado_eliminar_usuarios = sqlsrv_query( $conn, $sql_eliminar_usuarios);
    if($resultado_eliminar_usuarios){
        $mensaje_candidatos = "You have successfully deleted your candidate";
        //header("Location: index.php");
        $_GET["coachButton"]="inicio";
       //$_GET=null;
    }

}elseif (isset ($_GET["anadirId"])){
    
    $variableAnadirId = $_GET["anadirId"]; 

    $sql_anadir_usuarios = "UPDATE [dbo].[Usuarios] SET Coach =" . $_SESSION["coach"]["id"] . "WHERE id =" . $variableAnadirId . ";";
    $resultado_anadir_usuarios = sqlsrv_query( $conn, $sql_anadir_usuarios);
    $mensaje_candidatos = "You have successfully added a new candidate";
        if($resultado_anadir_usuarios){
           
            $sql = "SELECT * FROM [dbo].[Usuarios] WHERE id = " . $variableAnadirId . ";";
            $resultado_query = sqlsrv_query( $conn, $sql );
            if($resultado_query){
            $usuario = sqlsrv_fetch_array( $resultado_query, SQLSRV_FETCH_ASSOC);
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
                    $subject = "A new Coach from Palo Consult has contacted you";
                    enviarEmail ($email,$message,$nombre,$subject);
                    
                    //Header('Location: ' . $_SERVER['PHP_SELF']);
                    
                    //header("Location: index.php");
                    //Exit();
                     $_GET["coachButton"]="inicio";
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

    //$sql = "insert into dbo.PDF ([idUsuario], [Horas], [Comentario1], [Comentario2], [Comentario3], [Comentario4])"
    //        . " values (" . $nombreId . "," . $hours . ",'$comentario1','$comentario2','$comentario3','$comentario4')";
    $sql = "UPDATE dbo.Usuarios"   
            . " SET Horas = " . $hours . ", Comentario1='$comentario1', Comentario2='$comentario2', Comentario3='$comentario3', Comentario4='$comentario4'"  
            . " where id=" . $nombreId;
    
    $resultado = sqlsrv_query( $conn, $sql );


    if($resultado){


        $mensaje_candidatos = "Candidate´s data has been correctly added";
        //$template_seccion = "../templates/coaches.php";  
    }else{
        $mensaje_error = "Candidate´s data could not be added";
        //$template_seccion = "../templates/coaches.php";
    }
}



include '../../templates/main.php';
//require '../../endApp.php';