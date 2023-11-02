<?php
require('fpdf/fpdf.php');

// Obtener los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $tamaños = isset($_POST['tamanio']) ? $_POST['tamanio'] : [];
    $ingredients = isset($_POST['ingredientes']) ? $_POST['ingredientes'] : [];

    // Crear un objeto PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Generar el contenido del PDF
    $pdf->Cell(40, 10, 'Resumen del Pedido');
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Nombre del usuario: ' . $nombre);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Correo electrónico del usuario: ' . $correo);
    $pdf->Ln(10);
    $pdf->Cell(40, 10, 'Tamaños seleccionados:');
    foreach ($tamaños as $tamaño) {
        $pdf->Ln(10);
        $pdf->Cell(40, 10, 'Tamaño: ' . $tamaño);
    }
    $pdf->Cell(40, 10, 'Ingredientes seleccionados:');
    foreach ($ingredients as $ingredient) {
        $pdf->Ln(10);
        $pdf->Cell(40, 10, 'Ingrediente: ' . $ingredient);
    }

    // Generar el PDF
    $pdf->Output();
}
?>

