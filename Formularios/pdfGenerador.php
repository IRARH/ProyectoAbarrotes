<?php
require('../Libreria_PDF/fpdf.php');
require '../Clases/conexion.php';
$fecha = date("Y") . "/" . date("m") . "/" . date("d");

$validacion = "SELECT * FROM ventas";
//$destino = $_POST['tienda'];
$suma = "SELECT SUM(subtotal) FROM ventas";
//$query = "SELECT nombre_producto, cantidad_retiro, precio_venta, subtotal FROM estrella WHERE fecha='$fecha'";
$query = "select v.codigo_barras, p.nombre_producto, v.destinatario, v.cantidad_retiro, v.precio_venta, v.subtotal from ventas v INNER JOIN productos p on p.codigo_barras = v.codigo_barras";
$busqueda = mysqli_query(conexion(), $query);
$su = mysqli_query(conexion(),$suma);
$valida = mysqli_query(conexion(),$validacion);
if(mysqli_num_rows($valida) == 0){
    header('Location:./menu_notas_registrar_nota.php?mensaje=sinDatosVer');
} 
                    
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Arial','B',20);
    $this->SetY(10);
    $this->Cell(0,5, utf8_decode('Nota de remisión'),0,0,'C');
    
   
//$destinoValor = "Destinadario"
    $this->SetFont('Arial','B',14);
    $this->SetY(25);
    $this->SetX(9);
  
    $destino = "SELECT DISTINCT(destinatario) FROM ventas";   
    $destin = mysqli_query(conexion(),$destino);
    if(mysqli_num_rows($destin) > 0){
    while($row = $destin->fetch_assoc()){
    $this->Cell(0, 7, 'Destino: '.$row['destinatario'], 0, 0, 'L', 0);
    }
    }
   
    $this->SetY(32);
    $this->SetX(9);
    $this->SetFont('Arial','',14);
    $this->Cell(0,7, utf8_decode('Cargar a Inventario' ),0,0,'L');
    $this->Ln(20);

    $fechaActual="Fecha: ";
    $fecha = date("Y") . "/" . date("m") . "/" . date("d");

    $this->SetFont('Arial','',14);
    $this->SetY(25);
    $this->SetX(150);
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
    $pdf->Cell(36, 7, $signo.$row['precio_venta'].$decimales, 0, 0, 'L', 0);
    $pdf->Cell(26, 7, $signo.$row['subtotal'].$decimales, 0, 1, 'L', 0);
   // $pdf->Cell(30, 7, $row['destinatario'], 0, 0, 'L', 0);
   
   
}

while($row = $su->fetch_assoc()){
    $pdf->SetFillColor(206, 210, 214);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(158, 10, 'Total :', 0, 0, 'R', true);
    $pdf->Cell(36, 10, $signo.$row['SUM(subtotal)'],0 , 1, 'C', true);
}



//$pdf->Output();
$pdf->Output('I', 'Empleados.pdf');

?>



