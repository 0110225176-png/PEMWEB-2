<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Jika sudah login, lempar ke index
if (isset($_SESSION['USER'])) {
    header('location:index.php?hal=home');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - bup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 30px; border: 3px solid black; box-shadow: 10px 10px 0px black; width: 400px; }
        .form-control { border: 2px solid black !important; border-radius: 0px !important; }
        .btn-dark { border-radius: 0px !important; border: 2px solid black !important; font-weight: bold; }
        .back-link { display: inline-block; margin-top: 15px; color: black; text-decoration: none; font-weight: bold; font-size: 0.9rem; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-box text-center">
        <h3 class="fw-bold">Selamat Datang Kembali!</h3>
        <p class="text-muted small">Silakan masuk untuk mengakses dashboard</p>

        <form action="controller/memberController.php" method="POST" class="text-start mt-4">
            <label class="fw-bold small">USERNAME</label>
            <input type="text" name="username" class="form-control mb-3" required>
            
            <label class="fw-bold small">PASSWORD</label>
            <input type="password" name="password" class="form-control mb-4" required>
            
            <button type="submit" name="proses" value="login" class="btn btn-dark w-100">MASUK SEKARANG</button>
        </form>

        <a href="index.php?hal=home" class="back-link">
            <i class="bi bi-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
</body>
</html>