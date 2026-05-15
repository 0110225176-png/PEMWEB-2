<?php
include_once '../koneksi.php';
include_once '../models/Level.php';

$model = new Level($dbh);

$proses = $_POST['proses'];

if ($proses == 'simpan') {
    // Jika nanti kamu tambah fungsi simpan di model Level
    // $model->simpan($_POST['nama_level']);
    header('location:../index.php?hal=level');
}
if($proses == 'hapus')
?>