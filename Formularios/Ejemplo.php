<?php
require('../Libreria_PDF/fpdf.php');

/*
Fuentes

$fpdf->SetFont('Arial','', 14);
$fpdf->Cell(30, 5, 'Hola');
$fpdf->OutPut();
*/

/*
Colores, saltos y celdas
$fpdf->SetFont('Arial', 'B', 14);
$fpdf->Write(5,'Ejemplos');
$fpdf->Ln(10);

$fpdf->SetFont('Arial', 'B', 10);
$fpdf->SetFillColor(55,89,78);
$fpdf->Cell(25,5, 'hOLA', 1, 0, 'C', true);
$fpdf->Output();
*/


/*
Salidas
$fpdf->Output('I', 'Empleados.pdf');
*/

$fpdf = new FPDF();
$fpdf->AddPage('portrait', 'letter');

class pdf extends FPDF{

    public function header(){
        $this->SetFont('Courier', 'B', 12);
        $this->Write(5, 'Nota');

    }

    public function footer(){
        $this->SetFont('Courier', 'B', 12);
        $this->SetY(-15);
        $this->Write(5, 'Miguel');
    }

}


$fpdf = new pdf();
$fpdf->AddPage('portrait', 'letter');
$fpdf->Cell(0, 5, 'Listado');
$fpdf->Output();
