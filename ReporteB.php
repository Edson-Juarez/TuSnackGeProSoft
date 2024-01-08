<?php
require('fpdf/fpdf.php');
include("conexion.php");

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 
        'Reporte de Productos',
        'Dirección:Carretera costera esquina con calle Emilio Pimentel',  
        'San José del progreso Tututepec, Juquila Oaxaca.',''
        , 0, 0, 'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');
    }

    function HeaderTable()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(40, 10, 'Código', 1, 0, 'C');
        $this->Cell(70, 10, 'Proveedor', 1, 0, 'C');
        $this->Cell(60, 10, 'Producto', 1, 0, 'C');
        $this->Cell(20, 10, 'Stock', 1, 0, 'C');
        $this->Cell(40, 10, 'Notificacion', 1, 0, 'C');
        $this->Ln();
    }

    function ViewTable($conexion)
    {
        $this->SetFont('Arial', '', 12);
        $query = "SELECT codigo, proveedor, nombre_producto, stock FROM producto WHERE stock < 10";
        $result = mysqli_query($conexion, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $codigo = $row['codigo'];
            $proveedor = $row['proveedor'];
            $producto = $row['nombre_producto'];
            $stock = $row['stock'];

            $this->Cell(40, 10, $codigo, 1, 0, 'C');
            $this->Cell(70, 10, $proveedor, 1, 0, 'C');
            $this->Cell(60, 10, $producto, 1, 0, 'C');
            $this->Cell(20, 10, $stock, 1, 0, 'C');
            $this->Cell(40, 10, 'Pocas unidades', 1, 0, 'C');
            $this->Ln();
        }
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4', 0);
$pdf->HeaderTable();
$pdf->ViewTable($conexion);
$pdf->Output();
?>