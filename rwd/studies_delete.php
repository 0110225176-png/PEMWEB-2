<?php
// Tangkap ID dari URL
$id = $_GET['id'];

// Pastikan ada ID yang dikirim
if(!empty($id)){
    // Panggil model Studies
    include_once 'models/Studies.php';
    $obj = new Studies($dbh);
    
    // Panggil fungsi hapus (pastikan di model Studies.php sudah ada method hapus)
    $obj->hapus($id);
}

// Setelah hapus, arahkan kembali ke daftar studi
echo "<script>alert('Data Berhasil Dihapus');window.location.href='index.php?hal=studies_list';</script>";
?>