<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
session_start();
$nik        = $_SESSION['nik'];

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'CATATAN PERJALANAN', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 0, 0, 'C');
$pdf->Cell(40, 7, 'NIK', 0, 0, 'C');
$pdf->Cell(40, 7, 'TANGGAL', 0, 0, 'C');
$pdf->Cell(25, 7, 'WAKTU', 0, 0, 'C');
$pdf->Cell(50, 7, 'LOKASI', 0, 0, 'C');
$pdf->Cell(25, 7, 'SUHU', 0, 0, 'C');


$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($koneksi, "SELECT  * FROM catatan WHERE nik='$nik'");
while ($value = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 0, 0, 'C');
    $pdf->Cell(40, 6, $value['nik'], 0, 0, 'C');
    $pdf->Cell(40, 6, $value['tgl'], 0, 0, 'C');
    $pdf->Cell(25, 6, $value['waktu'], 0, 0, 'C');
    $pdf->Cell(50, 6, $value['lokasi'], 0, 0, 'C');
    $pdf->Cell(25, 6, $value['suhu'], 0, 1, 'C');
}

$pdf->Output();
