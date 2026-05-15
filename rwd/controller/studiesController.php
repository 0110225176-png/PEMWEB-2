<?php
include_once '../koneksi.php'; // Sesuaikan jalur ke file koneksi database kamu
include_once '../models/Studies.php';

// Tangkap object koneksi (asumsi nama variabel koneksi di file koneksi.php adalah $dbh)
$model = new Studies($dbh); 

// Tangkap tombol proses
$proses = $_POST['proses'];

// Tangkap data dari form
$nama = $_POST['nama'];
$idlevel = $_POST['idlevel'];
$keterangan = $_POST['keterangan'];
$tahun_lulus = $_POST['tahun_lulus'];

// Logika untuk Foto (Default jika tidak upload)
$foto_sekolah = $_POST['foto_sekolah'] ?? 'default.jpg'; 

if ($proses == 'simpan') {
    // Panggil fungsi simpan sesuai urutan di Model Studies:
    // simpan($nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah)
    $model->simpan($nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah);
    
    // Redirect kembali ke halaman studies
    header('location:../index.php?hal=studies');
}
if($proses == 'hapus')
?>