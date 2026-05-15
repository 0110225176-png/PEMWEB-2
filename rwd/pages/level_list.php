

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold m-0" style="color: black !important;">Daftar Jenjang Pendidikan</h3>
    
    <?php if(isset($_SESSION['USER'])): ?>
        <a href="index.php?hal=level_form" class="btn btn-success fw-bold px-4" style="border: 2px solid black !important; border-radius: 0; box-shadow: 3px 3px 0px black;">
            + Tambah Jenjang
        </a>
    <?php endif; ?>
</div>

<table class="table table-bordered align-middle">
    <thead class="table-dark" style="border: 2px solid black !important;">
        <tr class="text-center">
            <th width="50" style="border: 2px solid black !important; color: white !important;">No</th>
            <th style="border: 2px solid black !important; color: white !important;">Nama Jenjang</th>
            
            <?php if(isset($_SESSION['USER'])): ?>
                <th width="250" style="border: 2px solid black !important; color: white !important;">Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody style="color: black !important;">
        <?php
        // Ambil data asli dari database, bukan manual lagi bup!
        $sql = "SELECT * FROM levels";
        $rs = $dbh->query($sql);
        $no = 1;
        foreach ($rs as $row) :
        ?>
        <tr style="border: 2px solid black !important;">
            <td class="text-center" style="border: 2px solid black !important;"><?= $no++ ?></td>
            <td style="border: 2px solid black !important; font-weight: bold;"><?= $row['nama'] ?></td>
            
            <?php if(isset($_SESSION['USER'])): ?>
                <td class="text-center" style="border: 2px solid black !important;">
                    <a href="index.php?hal=level_detail&id=<?= $row['id'] ?>" class="btn btn-info btn-sm fw-bold" style="border: 2px solid black !important; border-radius: 0;">Detail</a>
                    
                    <a href="index.php?hal=level_form&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm fw-bold" style="border: 2px solid black !important; border-radius: 0;">Edit</a>

                    <?php if($_SESSION['USER']['role'] != 'staff'): ?>
                        <a href="level_proses.php?iddelete=<?= $row['id'] ?>" class="btn btn-danger btn-sm fw-bold" style="border: 2px solid black !important; border-radius: 0;" onclick="return confirm('Yakin mau hapus bup?')">
                            Hapus
                        </a>
                    <?php endif; ?>
                </td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>