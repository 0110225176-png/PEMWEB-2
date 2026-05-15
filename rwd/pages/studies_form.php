<?php
// 1. Tangkap ID dari URL (jika ada)
$id = $_GET['id'] ?? null;
$row = []; // Variabel untuk menampung data lama

if ($id) {
    // 2. Jika ada ID, ambil data dari database untuk ditampilkan di form
    $sql_edit = "SELECT * FROM studies WHERE id = ?";
    $stmt = $dbh->prepare($sql_edit);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}
?>

<div class="card p-4 shadow-sm" style="border: 2px solid black; border-radius: 0; box-shadow: 10px 10px 0px black;">
    <h3 class="fw-bold mb-4"><?php echo $id ? 'Form Edit' : 'Form Tambah'; ?> Riwayat Studi</h3>
    
    <form action="studies_proses.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $row['foto_sekolah'] ?? ''; ?>">

        <div class="mb-3">
            <label class="fw-bold">Nama Sekolah / Instansi</label>
            <input type="text" name="nama" class="form-control" style="border: 2px solid black; border-radius: 0;" 
                   value="<?php echo $row['nama_sekolah'] ?? ''; ?>" required>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Jenjang Pendidikan</label>
            <select name="idlevel" class="form-select" style="border: 2px solid black; border-radius: 0;" required>
                <option value="">-- Pilih Jenjang --</option>
                <?php
                $sql = "SELECT * FROM levels";
                $rs = $dbh->query($sql);
                foreach($rs as $lev) {
                    $sel = ($id && $lev['id'] == $row['idlevel']) ? 'selected' : '';
                    echo "<option value='".$lev['id']."' $sel>".$lev['nama']."</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Keterangan</label>
            <textarea name="keterangan" class="form-control" style="border: 2px solid black; border-radius: 0;"><?php echo $row['keterangan'] ?? ''; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Tahun Lulus</label>
            <input type="text" name="tahun_lulus" class="form-control" style="border: 2px solid black; border-radius: 0;" 
                   value="<?php echo $row['tahun_lulus'] ?? ''; ?>" required>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Foto Sekolah</label>
            <?php if ($id && !empty($row['foto_sekolah'])): ?>
                <div class="mb-2 text-center">
                    <img src="img/<?php echo $row['foto_sekolah']; ?>" width="150" class="img-thumbnail border-dark mb-2">
                    <br>
                    <small class="text-muted">Nama file: <?php echo $row['foto_sekolah']; ?></small>
                </div>
            <?php endif; ?>
            <input type="file" name="foto_sekolah" class="form-control" style="border: 2px solid black; border-radius: 0;">
            <small class="text-danger">*Kosongkan jika tidak ingin mengganti foto</small>
        </div>
        
        <button type="submit" name="proses" value="<?php echo $id ? 'ubah' : 'simpan'; ?>" 
                class="btn <?php echo $id ? 'btn-warning' : 'btn-success'; ?> fw-bold" 
                style="border: 2px solid black; border-radius: 0;">
            <?php echo $id ? 'Update Data' : 'Simpan Data'; ?>
        </button>
    </form>
</div>