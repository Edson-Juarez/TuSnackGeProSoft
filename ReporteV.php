<?php
require('fpdf/fpdf.php');
include("conexion.php");

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Reporte de Ventas', 0, 0, 'C');
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
        $this->Cell(30, 10, 'ID Venta', 1, 0, 'C');
        $this->Cell(50, 10, 'Código Producto', 1, 0, 'C');
        $this->Cell(30, 10, 'Cantidad', 1, 0, 'C');
        $this->Cell(40, 10, 'Total Venta', 1, 0, 'C');
        $this->Cell(50, 10, 'Fecha Venta', 1, 0, 'C');
        $this->Ln();
    }

    function ViewTable($conexion)
    {
        $this->SetFont('Arial', '', 12);
        $query = "SELECT id_venta, codigo_producto, cantidad, total_venta, fecha_venta FROM ventas";
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die('Error in query: ' . mysqli_error($conexion));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $id_venta = $row['id_venta'];
            $codigo_producto = $row['codigo_producto'];
            $cantidad = $row['cantidad'];
            $total_venta = $row['total_venta'];
            $fecha_venta = $row['fecha_venta'];

            $this->Cell(30, 10, $id_venta, 1, 0, 'C');
            $this->Cell(50, 10, $codigo_producto, 1, 0, 'C');
            $this->Cell(30, 10, $cantidad, 1, 0, 'C');
            $this->Cell(40, 10, $total_venta, 1, 0, 'C');
            $this->Cell(50, 10, $fecha_venta, 1, 0, 'C'); // You may need to format the date here

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
