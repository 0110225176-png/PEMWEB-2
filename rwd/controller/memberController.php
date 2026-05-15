<?php
session_start();
include_once '../koneksi.php';
include_once '../models/member.php';

// Menangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$data = [$username, $password];

// Eksekusi fungsi cekLogin
$obj = new Member();
$rs = $obj->cekLogin($data);

// Bagian akhir dari memberController.php
if(!empty($rs)){
    $_SESSION['USER'] = $rs;
    // Arahkan ke file utama setelah login sukses
    header('location:../index.php?hal=home');
} else {
    echo "<script>alert('Login Gagal'); window.location.href='../login.php';</script>";
}