<?php
$id = $_GET['id'] ?? null;
$row = [];

if ($id) {
    $sql_edit = "SELECT * FROM levels WHERE id = ?";
    $stmt = $dbh->prepare($sql_edit);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
}
?>

<div class="card p-4 shadow-sm" style="border: 2px solid black; border-radius: 0; box-shadow: 10px 10px 0px black;">
    <h3 class="fw-bold mb-4"><?php echo $id ? 'Edit' : 'Tambah'; ?> Jenjang Pendidikan</h3>
    <form action="level_proses.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="mb-3">
            <label class="fw-bold">Nama Jenjang</label>
            <input type="text" name="nama" class="form-control" 
                   style="border: 2px solid black; border-radius: 0;" 
                   value="<?php echo $row['nama'] ?? ''; ?>" required>
        </div>

        <button type="submit" name="proses" value="<?php echo $id ? 'ubah' : 'simpan'; ?>" 
                class="btn <?php echo $id ? 'btn-warning' : 'btn-success'; ?> fw-bold" 
                style="border: 2px solid black; border-radius: 0;">
            <?php echo $id ? 'Update' : 'Simpan'; ?>
        </button>
    </form>
</div>