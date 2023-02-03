<?php

// Sambungkan ke fpdf library
require '../library/fpdf.php.';
include '../koneksi.php';

// instanstasi objek dari membuat akun pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

// Buat juduulnya disini
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA ANGGOTA',0,0,'C');

// Buat Pengaturan tabel HEAD
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(75,7,'NAMA',1,0,'C');
$pdf->Cell(50,7,'NO TELP',1,0,'C');
$pdf->Cell(55,7,'ALAMAT',1,0,'C');
$pdf->Cell(75,7,'EMAIL',1,0,'C');

// Buat Pengaturan tabel isi
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data =mysqli_query($koneksi,"select * from anggota");
while($meledak = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(75,7,$meledak['nama'],1,0,'C');
    $pdf->Cell(50,7,$meledak['no_telp'],1,0,'C');
    $pdf->Cell(55,7,$meledak['alamat'],1,0,'C');
    $pdf->Cell(75,7,$meledak['email'],1,1,'C');
}

$pdf->Output();


?>