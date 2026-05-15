<?php
$host = 'localhost';
$db = 'dblabibah';
$user = 'root';
$pass = ''; // Kosongkan jika menggunakan XAMPP standar

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>