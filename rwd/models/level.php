<?php
class Level {
    private $koneksi;

    public function __construct($dbh) {
        $this->koneksi = $dbh;
    }

    // Fungsi untuk Simpan Data Baru
    public function simpan($nama) {
        $sql = "INSERT INTO levels (nama) VALUES (?)";
        $st = $this->koneksi->prepare($sql);
        $st->execute([$nama]);
    }

    // Fungsi untuk Update Data
    public function ubah($id, $nama) {
        $sql = "UPDATE levels SET nama=? WHERE id=?";
        $st = $this->koneksi->prepare($sql);
        $st->execute([$nama, $id]);
    }
}
?>