<?php
// Wajib diletakkan di baris paling atas tanpa spasi sebelum tag PHP agar session terbaca [cite: 11]
session_start(); 

// Memanggil file koneksi dan semua model yang diperlukan agar tersedia di seluruh halaman
require_once 'koneksi.php';      
require_once 'models/level.php'; 
require_once 'models/member.php'; 
require_once 'models/studies.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Home Page - bup</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Gaya Neobrutalism Khas bup */
        .navbar-dark .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff !important;
            opacity: 1 !important; 
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #e3f2fd !important; 
        }

        /* Border Hitam Tebal & Shadow Kaku untuk komponen Bootstrap [cite: 4] */
        .card, .table, .list-group-item, .btn {
            border: 2px solid black !important; 
            border-radius: 0px !important; 
            color: black !important; 
        }

        .card {
            box-shadow: 5px 5px 0px black !important;
        }

        h2, h3, th, td {
            color: black !important;
        }

        .list-group-item a {
            color: black !important;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <div class="flex-grow-1">
        <div class="container-fluid p-0">
            
            <div class="row m-0">
                <div class="col-md-12 p-0">
                    <?php include_once 'menu.php'; ?>
                </div>
            </div>

            <div class="row m-0">
                <div class="col-md-12 p-0">
                    <?php include_once 'header.php'; ?>
                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="row px-3">
                    <div class="col-md-3">
                        <?php include_once 'sidebar.php'; ?>
                    </div>

                    <div class="col-md-9">
                        <div class="card p-4 mb-4">
                            <?php
                                // Ambil parameter hal, jika kosong defaultnya 'home'
                                $hal = $_GET['hal'] ?? 'home';

                                // Tentukan path file, karena file kamu banyak di folder 'pages'
                                $file_root = $hal . '.php';
                                $file_pages = 'pages/' . $hal . '.php';

                                if (file_exists($file_root)) {
                                    include_once $file_root;
                                } elseif (file_exists($file_pages)) {
                                    include_once $file_pages;
                                } else {
                                    // Jika file tidak ada di root maupun folder pages, lari ke home
                                    // Pastikan file home.php ada di root atau di folder pages
                                    if (file_exists('home.php')) {
                                        include_once 'home.php';
                                    } elseif (file_exists('pages/home.php')) {
                                        include_once 'pages/home.php';
                                    } else {
                                        echo "Halaman tidak ditemukan!";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </div>

    <footer class="mt-auto">
        <div class="container-fluid p-0">
            <?php include_once 'footer.php'; ?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>