<?php
require('../fpdf186/fpdf.php');
include 'koneksi.php';

class PDF extends FPDF
{
    // Header
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Data RunTracker', 0, 1, 'C');
        $this->Ln(10);
    }

    // Footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Create instance of the PDF class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$query = "SELECT * FROM data_pengguna";
$result = mysqli_query($koneksi, $query);

$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(40, 10, 'Nama Pengguna', 1);
$pdf->Cell(40, 10, 'Kategori Olahraga', 1);
$pdf->Cell(30, 10, 'No Tlp', 1);
$pdf->Cell(50, 10, 'Lokasi Saat Ini', 1);
$pdf->Cell(20, 10, 'Kondisi Fisik', 1);
$pdf->Ln();

$nol = 1;
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(10, 10, $nol, 1);
    $pdf->Cell(40, 10, $row['nama_pengguna'], 1);
    $pdf->Cell(40, 10, $row['kategori_olahraga'], 1);
    $pdf->Cell(30, 10, $row['no_tlp'], 1);
    $pdf->Cell(50, 10, $row['lokasi'], 1);
    $pdf->Cell(20, 10, $row['kondisi_fisik'], 1);
    $pdf->Ln();
    $nol++;
}

$pdf->Output('D', 'RunTracker_Report.pdf');
?>
