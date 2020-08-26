<?php

require('../Libreria_PDF/fpdf.php');
require_once 'conexion.php';
if($_POST){

    //Obetner lo que se envio por GET
    $tienda = $_POST['tienda'];
    $fecha = $_POST['fecha'];
    $consulta = "SELECT * FROM $tienda where fecha = '$fecha'";
    $suma = "SELECT SUM(subtotal) FROM $tienda";
    $sumaSubtotales = mysqli_query(conexion(),$suma);
    $busqueda = mysqli_query(conexion(), $consulta);
    if(mysqli_num_rows($busqueda) == 0){
        header('Location:../Formularios/menu_estadisticas_notas.php?mensaje=sinDatosVer');
    }else{

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Arial','B',20);
    $this->SetY(10);
    $this->Cell(0,5, utf8_decode('Reporte de Nota'),0,0,'C');
    $this->SetFont('Arial','B',14);
    $this->SetY(25);
    $this->SetX(9);
    if($_POST){
    $tienda = $_POST['tienda'];        
    $this->Cell(0, 7, 'Reporte de: '.$tienda, 0, 0, 'L', 0);
    }

    $fechaActual="Fecha: ";
    $this->SetFont('Arial','',14);
    $this->SetY(25);
    $this->SetX(150);
    $fecha = $_POST['fecha'];
    $this->Cell(10,5, utf8_decode($fechaActual.$fecha),0,0,'C');
    $this->Ln(20);


    $this->SetFont('Arial','B',12);
    $this->SetFillColor(206, 210, 214);
   // $this->Cell(43, 10, 'Codigo de Barras', 0, 0, 'C', true);
    $this->Cell(90, 10, 'Nombre', 0, 0, 'C', true);
    $this->Cell(30, 10, 'Cantidad', 0, 0, 'C',  true);
    $this->Cell(40, 10, 'Precio ', 0, 0, 'C',  true);
    $this->Cell(34, 10, 'Subtotal', 0, 1, 'C',  true);
}

// Pie de página
function Footer()
{
    $this->SetFont('Arial','B',14);
    $this->SetY(265);
   // $this->SetX(-15);
    $this->Cell(0,5, utf8_decode('___________________________________' ),0,0,'C');
    $this->SetFont('Arial','B',14);
    $this->SetY(274);
   // $this->SetX(-15);
    $this->Cell(0,5, utf8_decode('Firma' ),0,0,'C');
    $this->Ln(20);


    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    $this->SetX(180);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Número de página
    
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}


}
$signo ="$ ";
$decimales =".00";

$pdf = new PDF();
//Alias de pagina
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $busqueda->fetch_assoc()){
   // $pdf->Cell(40, 7, $row['codigo_barras'], 0, 0,'C', 0);
    $pdf->Cell(102, 7, $row['nombre_producto'], 0, 0, 'L', 0);
    $pdf->Cell(30, 7, $row['cantidad_retiro'], 0, 0, 'L', 0);
    $pdf->Cell(36, 7, $signo.$row['precio_venta'], 0, 0, 'L', 0);
    $pdf->Cell(26, 7, $signo.$row['subtotal'], 0, 1, 'L', 0);
   // $pdf->Cell(30, 7, $row['destinatario'], 0, 0, 'L', 0);
   
   
}
while($row = $sumaSubtotales->fetch_assoc()){
    $pdf->SetFillColor(206, 210, 214);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(158, 10, 'Total :', 0, 0, 'R', true);
    $pdf->Cell(36, 10, $signo.$row['SUM(subtotal)'],0 , 1, 'C', true);
}



//$pdf->Output();
$pdf->Output('I', 'Empleados.pdf');


}
}