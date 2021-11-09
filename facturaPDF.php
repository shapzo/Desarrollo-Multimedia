<?php
// include class
require 'fpdf/fpdf.php';
require("Config/Conexion.php");

//area para los datos del cliente

global $Conexion;

mysqli_set_charset($Conexion, 'utf8');
$elUsuarios = array();
$sqlUsuarioses = "SELECT * FROM Usuarios ORDER BY Id DESC LIMIT 1";
$resultadoUsuarioses = mysqli_query($Conexion, $sqlUsuarioses);

while ($Usuarios = mysqli_fetch_array($resultadoUsuarioses, MYSQLI_ASSOC)) {
$elUsuarios[] = $Usuarios;
}

mysqli_close($Conexion);    

// creacion del documento
$pdf = new FPDF();
$pdf->AddPage('L');

$pdf->SetTitle('Recivo de pago');
$pdf->SetAuthor('Acolman, Feria de la Piñata');
$pdf->SetCreator('Ekipo Desarrollo Multimadia');

//color de texto
$pdf->Image('Img/imgwall.jpg', 0, 0, 320);
$pdf->SetTextColor(255, 6, 191);

// titulo
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 20, 'Feria de la pinata', 0, 1, 'C');
$pdf->Ln();

// imagen
$pdf->Image('Img/imgfact1.jpg', 5, 70, 75);
$pdf->Ln();

//color de texto
$pdf->SetTextColor(252, 0, 134);

// textuky
foreach ($elUsuarios as $Usuarios){
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(0, 7, utf8_decode('Gracias por su compra.'), 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 17);
    $pdf->Cell(0, 7, utf8_decode('Señor:'. $Usuarios['Nombre'].' '.$Usuarios['Apellido'] .''), 0, 1, 'C');
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(0, 7, utf8_decode('El presio del recorrido es de:'), 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 17);
    $pdf->Cell(0, 7, utf8_decode('500 pesos, a todo el publico en general'), 0, 1, 'C');

    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(0, 7, utf8_decode('La cantidad sera descontada de su Tarjeta '. $Usuarios['Pago'].' '), 0, 1, 'C');
    $pdf->Ln();

    
    $pdf->Cell(0, 7, utf8_decode('Lo esperamos el dia '. $Usuarios['Fecha'].''), 0, 1, 'C');
    $pdf->Ln();
}

// imagen
$pdf->Image('Img/imgfact2.jpg', 215, 70, 75);
$pdf->Ln();

// output file
$pdf->Output('', 'recibo.pdf');