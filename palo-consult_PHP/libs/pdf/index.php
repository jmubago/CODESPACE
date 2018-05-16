<?php
// (c) Xavier Nicolay
// Exemple de génération de devis/facture PDF

//require "../../startApp.php";
require('invoice.php');

date_default_timezone_set('UTC');
$hoy = date("Y/m/d");
//print_r($hoy);

$sql_empresa = "SELECT * FROM [dbo].[Empresa];";
$resultado_empresa = sqlsrv_query( $conn, $sql_empresa );
$empresa = sqlsrv_fetch_array( $resultado_empresa, SQLSRV_FETCH_ASSOC);

$sql_coach = "SELECT * FROM [dbo].[Coach];";
$resultado_coach = sqlsrv_query( $conn, $sql_coach );
$coach = sqlsrv_fetch_array( $resultado_coach, SQLSRV_FETCH_ASSOC);

$sql_usuario = "SELECT * FROM [dbo].[Usuarios];";
$resultado_usuario = sqlsrv_query( $conn, $sql_coach );
$usuario = sqlsrv_fetch_array( $resultado_usuario, SQLSRV_FETCH_ASSOC);

$sql ="SELECT * FROM [dbo].[PDF];";
$resultado_pdf = sqlsrv_query($conn, $sql);
$pdf = sqlsrv_fetch_array( $resultado_pdf, SQLSRV_FETCH_ASSOC);


$empresa_nombre= $empresa["RazonSocial"];
$empresa_id= $empresa["id"];
$empresa_direccion= $empresa["Direccion"];
$coach_nombre= $coach["Nombre"] . " " . $coach["Apellido"];


 

/*
$nombreId=$_POST["candidateFormSelec"];
$hours =$_POST["hours"];
$comentario1 =$_POST["comentario1"];
$comentario2 =$_POST["comentario2"];
$comentario3 =$_POST["comentario3"];

$sql_formulario = "
select us.Nombre AS UsuarioNombre,us.Apellido AS UsuarioApellido,em.RazonSocial AS EmpresaRazonSocial,em.id AS EmpresaID,em.Direccion AS EmpresaDireccion,co.Nombre AS CoachNombre,co.Apellido AS CoachApellido FROM dbo.Usuarios AS us INNER JOIN dbo.Empresa AS em ON us.idEmpresa = em.id INNER JOIN dbo.Coach AS co ON us.Coach = co.id WHERE us.id =" . $nombreId;
echo $sql_formulario;

$resultado_formulario = sqlsrv_query( $conn, $sql_formulario );
if($resultado_formulario){
    $formulario = sqlsrv_fetch_array( $resultado_formulario, SQLSRV_FETCH_ASSOC);
    if($formulario){
        $_SESSION["formulario"] = $formulario;
        echo $formulario["UsuarioNombre"] . "\t";
        echo $formulario["UsuarioApellido"] . "\t";
        echo $formulario["EmpresaRazonSocial"] . "\t";
        echo $formulario["EmpresaID"] . "\n";
        echo $formulario["EmpresaDireccion"] . "\n";
        echo $formulario["CoachNombre"] . "\n";
        echo $formulario["CoachApellido"] . "\n";
        echo $comentario1;
        echo $comentario2;
        echo $comentario3;
        echo $hours;
    }
}

$usuario_nombre = $formulario["UsuarioNombre"] . " " . $formulario["UsuarioApellido"];
$empresa_nombre = $formulario["EmpresaRazonSocial"];
$empresa_id = $formulario["EmpresaID"];
$empresa_direccion = $formulario["EmpresaDireccion"];
$coach_nombre=$formulario["CoachNombre"] . " " . $formulario["CoachApellido"];
$comentario1;
$comentario2;
$comentario3;
$hours;
 * */


 


$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
//$pdf->GetData();
$pdf->AddPage();
$pdf->Image('logo.png',10,10,-200);
$pdf->addSociete( "Palo Consult",
                  "C/Compositor Lehmberg Ruiz\n" .
                  "29007 Malaga\n" .
                  "999111666\n" .
                  "");
$pdf->fact_dev( "Devis ", "TEMPO" );
$pdf->addDate( $hoy);
$pdf->addClient($empresa_id);
$pdf->addPageNumber("1");
$pdf->addClientAdresse($empresa_direccion);
$pdf->addReglement($empresa_nombre);
$pdf->addEcheance($hoy);
$pdf->addNumTVA($coach_nombre);
$pdf->addReference($coach_nombre);
/*$cols=array( "REFERENCE"    => 23,
             "DESIGNATION"  => 78,
             "QUANTITE"     => 22,
             "P.U. HT"      => 26,
             "MONTANT H.T." => 30,
             "TVA"          => 11 );*/


$cols=array( "REFERENCE"    => 190);
$comentario1="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$pdf->addCols( $cols, $comentario1);



$cols=array( "HOLA"    => 190);
$comentario2="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$pdf->addCols2( $cols, $comentario2);




$cols=array( "HOLA CARACOLA"    => 190);
$comentario3="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$pdf->addCols3( $cols, $comentario3);




/*$cols=array( "REFERENCE"    => "L",
             "DESIGNATION"  => "L",
             "QUANTITE"     => "C",
             "P.U. HT"      => "R",
             "MONTANT H.T." => "R",
             "TVA"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);

$y    = 109;
$line = array( "REFERENCE"    => "REF1",
               "DESIGNATION"  => "Carte Mère MSI 6378\n" .
                                 "Processeur AMD 1Ghz\n" .
                                 "128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo",
               "QUANTITE"     => "1",
               "P.U. HT"      => "600.00",
               "MONTANT H.T." => "600.00",
               "TVA"          => "1" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;

$line = array( "REFERENCE"    => "REF2",
               "DESIGNATION"  => "Câble RS232",
               "QUANTITE"     => "1",
               "P.U. HT"      => "10.00",
               "MONTANT H.T." => "60.00",
               "TVA"          => "1" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;*/

//$pdf->addCadreTVAs();
        
// invoice = array( "px_unit" => value,
//                  "qte"     => qte,
//                  "tva"     => code_tva );
// tab_tva = array( "1"       => 19.6,
//                  "2"       => 5.5, ... );
// params  = array( "RemiseGlobale" => [0|1],
//                      "remise_tva"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      "remise"         => value,     // {montant de la remise}
//                      "remise_percent" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  "FraisPort"     => [0|1],
//                      "portTTC"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      "portHT"         => value,     // montant des frais de ports HT
//                      "portTVA"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  "AccompteExige" => [0|1],
//                      "accompte"         => value    // montant de l'acompte (TTC)
//                      "accompte_percent" => percent  // pourcentage d'acompte (TTC)
//                  "Remarque" => "texte"              // texte
/*$tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
                    array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
$tab_tva = array( "1"       => 19.6,
                  "2"       => 5.5);*/
/*$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 1,       // {la remise s'applique sur ce code TVA}
                      "remise"         => 0,       // {montant de la remise}
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  "FraisPort"     => 1,
                      "portTTC"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      "portHT"         => 0,       // montant des frais de ports HT
                      "portTVA"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  "AccompteExige" => 1,
                      "accompte"         => 0,     // montant de l'acompte (TTC)
                      "accompte_percent" => 15,    // pourcentage d'acompte (TTC)
                  "Remarque" => "Avec un acompte, svp..." );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();*/
$pdf->Output();
?>