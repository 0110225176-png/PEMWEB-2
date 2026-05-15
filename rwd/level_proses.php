<?php
// 1. Sesuaikan nama file ke koneksi.php
if (file_exists('koneksi.php')) {
    include_once 'koneksi.php';
} elseif (file_exists('../koneksi.php')) {
    include_once '../koneksi.php';
} else {
    // Jalur darurat jika di dalam folder rwd
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myProfile/rwd/koneksi.php';
}

// 2. Panggil Model
include_once 'models/Level.php';

// 3. Gunakan $dbh karena di koneksi.php bup pakai nama $dbh
if (!isset($dbh)) {
    die("Error: Koneksi database ($dbh) tidak ditemukan!");
}

$model = new Level($dbh);

// 4. Proses Simpan & Ubah (POST)
if (isset($_POST['proses'])) {
    $id     = $_POST['id'] ?? null;
    $nama   = $_POST['nama'] ?? '';
    $proses = $_POST['proses'];

    if ($proses == 'simpan') {
        $model->simpan($nama);
    } elseif ($proses == 'ubah') {
        $model->ubah($id, $nama);
    }
}

// 5. Proses Hapus (GET) - Sesuaikan dengan link di list
if (isset($_GET['iddelete'])) {
    $iddelete = $_GET['iddelete'];
    $sql = "DELETE FROM levels WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$iddelete]);
}

header('location:index.php?hal=level_list');
exit;
?>