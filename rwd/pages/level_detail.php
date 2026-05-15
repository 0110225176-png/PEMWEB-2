<?php
include "koneksi.php"; // Sesuaikan path jika di dalam folder, misal "../koneksi.php"

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan variabel $dbh sesuai file koneksi bup
    $stmt = $dbh->prepare("SELECT * FROM levels WHERE id = ?");
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        echo "<script>alert('Data tidak ditemukan!'); window.location='index.php?hal=level_list';</script>";
        exit;
    }
} else {
    header("Location: index.php?hal=level_list");
    exit;
}
?>

<div class="card p-4" style="border: 2px solid black !important; border-radius: 0; box-shadow: 5px 5px 0px black;">
    <h5 class="fw-bold mb-3" style="color: #0a0a0a !important;">Informasi Detail Level</h5>
    
    <hr style="border-top: 2px solid black; opacity: 1;">
    
    <div class="row mb-2">
        <div class="col-md-3 fw-bold" style="color: black !important;">ID Level</div>
        <div class="col-md-1" style="color: black !important;">:</div>
        <div class="col-md-8" style="color: black !important;">
            <?php echo $data['id']; ?>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-3 fw-bold" style="color: black !important;">Nama Jenjang</div>
        <div class="col-md-1" style="color: black !important;">:</div>
        <div class="col-md-8" style="color: black !important;">
            <?php echo $data['nama']; ?>
        </div>
    </div>

    <p class="small fw-bold" style="color: #20c997 !important;">
        *Data ini digunakan sebagai kategori utama dalam riwayat studi Anda.
    </p>

    <div class="mt-3">
        <a href="index.php?hal=level_list" class="btn btn-dark w-100 fw-bold" style="border: 2px solid black !important; border-radius: 0;">
            Kembali ke Daftar
        </a>
    </div>
</div>