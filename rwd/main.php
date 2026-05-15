<?php
// Ambil parameter 'page' dari URL
$hal = isset($_GET['page']) ? $_GET['page'] : 'home';

// Arahkan ke file yang ada di folder 'pages'
if ($hal == 'home') {
    include_once 'pages/home.php';
} elseif ($hal == 'about') {
    include_once 'pages/about.php';
} elseif ($hal == 'contact') {
    include_once 'pages/contact.php';
} elseif ($hal == 'gallery') {
    include_once 'pages/gallery.php';
} elseif ($hal == 'level') {
    include_once 'pages/level_list.php'; // Nanti buat file ini untuk CRUD Level
} elseif ($hal == 'studies') {
    include_once 'pages/studies_list.php'; // Nanti buat file ini untuk CRUD Studies
} else {
    include_once 'pages/home.php';
}
?>