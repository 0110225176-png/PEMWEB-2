<div class="card p-4 shadow-sm" style="border: 2px solid black; border-radius: 0; box-shadow: 10px 10px 0px black;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0" style="color: black !important;">Riwayat Pendidikan (Studies)</h3>
        <?php if(isset($_SESSION['USER'])): ?>
            <a href="index.php?hal=studies_form" class="btn btn-success fw-bold" style="border: 2px solid black; border-radius: 0; box-shadow: 3px 3px 0px black;">
                + Tambah Studi
            </a>
        <?php endif; ?>
    </div>

    <table class="table table-hover mt-3" style="border: 2px solid black; border-collapse: collapse;">
        <thead>
            <tr class="text-center">
                <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">No</th>
                <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">Level</th>
                <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">Nama Sekolah</th>
                <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">Lulus</th>
                <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">Foto</th>
                
                <?php if(isset($_SESSION['USER'])): ?>
                    <th style="background-color: #212529 !important; color: white !important; border: 1px solid black; padding: 12px;">Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/Studies.php';
            $obj = new Studies($dbh); 
            $data = $obj->dataStudies();
            
            $no = 1;
            foreach($data as $row):
            ?>
            <tr class="align-middle text-center">
                <td class="fw-bold" style="border: 1px solid black; color: black !important;"><?= $no++ ?></td> 
                <td style="border: 1px solid black; color: black !important;"><?= $row['nama_jenjang'] ?></td>
                <td style="border: 1px solid black; color: black !important;" class="text-start"><?= $row['nama'] ?></td>
                <td style="border: 1px solid black; color: black !important;"><?= $row['tahun_lulus'] ?></td>
                <td style="border: 1px solid black;">
                    <?php if(!empty($row['foto_sekolah'])): ?>
                        <img src="img/<?= $row['foto_sekolah'] ?>" width="50" style="border: 1px solid black;">
                    <?php else: ?>
                        <span class="text-muted" style="font-size: 0.8rem;">No Photo</span>
                    <?php endif; ?>
                </td>

                <?php if(isset($_SESSION['USER'])): ?>
                <td style="border: 1px solid black;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm fw-bold" 
                                data-bs-toggle="modal" 
                                data-bs-target="#detailModal<?= $row['id'] ?>"
                                style="border: 1px solid black; border-radius: 0;">
                            Detail
                        </button>
                        
                        <a href="index.php?hal=studies_form&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                        <?php if($_SESSION['USER']['role'] != 'staff'): ?>
                            <a href="index.php?hal=studies_delete&id=<?= $row['id'] ?>" 
                               class="btn btn-danger btn-sm fw-bold" 
                               style="border: 1px solid black; border-radius: 0;"
                               onclick="return confirm('Yakin mau hapus data studi ini?')">
                                Hapus
                            </a>
                        <?php endif; ?>
                    </div>
                </td>
                <?php endif; ?>
            </tr>

            <div class="modal fade" id="detailModal<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border: 3px solid black; border-radius: 0;">
                        <div class="modal-header" style="background-color: #212529; border-bottom: 2px solid black;">
                            <h5 class="modal-title fw-bold" style="color: white !important;">Detail Riwayat: <?= $row['nama'] ?></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color: white; color: black;">
                            <div class="text-center mb-4">
                                <?php if(!empty($row['foto_sekolah'])): ?>
                                    <img src="img/<?= $row['foto_sekolah'] ?>" class="img-fluid" style="border: 2px solid black; box-shadow: 5px 5px 0px black;">
                                <?php else: ?>
                                    <div class="p-4 border border-dark bg-light">No Photo Available</div>
                                <?php endif; ?>
                            </div>
                            <div class="mt-3 text-start">
                                <p class="mb-2"><strong>Jenjang:</strong> <?= $row['nama_jenjang'] ?></p>
                                <p class="mb-2"><strong>Tahun Lulus:</strong> <?= $row['tahun_lulus'] ?></p>
                                <hr style="border-top: 2px solid black;">
                                <p class="mb-1"><strong>Keterangan:</strong></p>
                                <div class="p-2 border border-dark bg-light" style="min-height: 50px;">
                                    <?= $row['keterangan'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top: 2px solid black;">
                            <button type="button" class="btn btn-dark fw-bold" data-bs-dismiss="modal" style="border-radius: 0; border: 1px solid black;">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>