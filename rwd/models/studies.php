<?php
class Studies {
    private $koneksi;

    public function __construct($dbh) {
        $this->koneksi = $dbh;
    }

    public function dataStudies() {
        $sql = "SELECT studies.*, levels.nama AS nama_jenjang 
                FROM studies 
                INNER JOIN levels ON studies.idlevel = levels.id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        return $ps->fetchAll();
    }

    public function simpan($nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah) {
        $sql = "INSERT INTO studies (nama, idlevel, keterangan, tahun_lulus, foto_sekolah) 
                VALUES (?, ?, ?, ?, ?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah]);
    }

    public function ubah($id, $nama, $idlevel, $keterangan, $tahun_lulus, $foto) {
        $sql = "UPDATE studies SET nama=?, idlevel=?, keterangan=?, tahun_lulus=?, foto_sekolah=? WHERE id=?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$nama, $idlevel, $keterangan, $tahun_lulus, $foto, $id]);
    }

    public function hapus($id) {
        $sql = "DELETE FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>