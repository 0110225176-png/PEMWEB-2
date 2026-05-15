<?php
// 1. Panggil file koneksi yang benar
if (file_exists('koneksi.php')) {
    include_once 'koneksi.php';
} elseif (file_exists('../koneksi.php')) {
    include_once '../koneksi.php';
} else {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myProfile/rwd/koneksi.php';
}

include_once 'models/Studies.php';

$model = new Studies($dbh);

// 2. Tangkap data dari form
$id          = $_POST['id'] ?? null;
$nama        = $_POST['nama'] ?? '';
$idlevel     = $_POST['idlevel'] ?? '';
$keterangan  = $_POST['keterangan'] ?? '';
$tahun_lulus = $_POST['tahun_lulus'] ?? '';
$proses      = $_POST['proses'] ?? '';

// 3. Logika Upload Foto
$foto_sekolah = $_FILES['foto_sekolah']['name'];
$tmp          = $_FILES['foto_sekolah']['tmp_name'];

if (!empty($foto_sekolah)) {
    // Jika user upload foto baru
    move_uploaded_file($tmp, 'img/' . $foto_sekolah);
} else {
    // Jika tidak upload foto baru, ambil nama foto lama dari hidden input (jika ada)
    $foto_sekolah = $_POST['foto_lama'] ?? '';
}

// 4. Eksekusi Berdasarkan Proses
if ($proses == 'simpan') {
    $model->simpan($nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah);
} elseif ($proses == 'ubah') {
    $model->ubah($id, $nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah);
}

// 5. Kembalikan ke list
header('location:index.php?hal=studies_list');
exit;
?>