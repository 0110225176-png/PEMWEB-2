<?php
session_start();
// Hapus data login
session_destroy();

// Kembali ke halaman utama sesuai ketentuan tugas
header('location:index.php?hal=home');
exit;