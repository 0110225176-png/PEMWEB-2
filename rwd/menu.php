<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1 shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?hal=home">Beh...</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?hal=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Studies
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?hal=level_list">Level</a></li>
            <li><a class="dropdown-item" href="index.php?hal=studies_list">Studies</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <?php if(!isset($_SESSION['USER'])): ?>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="login.php">Login</a>
          </li> 
        <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active fw-bold" data-bs-toggle="dropdown" href="#" role="button">
              <i class="bi bi-person-circle"></i> <?= $_SESSION['USER']['fullname'] ?> (<?= ucfirst($_SESSION['USER']['role']) ?>)
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                  <a class="dropdown-item text-danger fw-bold" href="logout.php" onclick="return confirm('Yakin ingin logout sekarang?')">
                      <i class="bi bi-box-arrow-right"></i> Logout
                  </a>
              </li>
            </ul>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
      
      
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border: 2px solid black !important; border-radius: 0;">
        <button class="btn btn-outline-success" type="submit" style="border: 2px solid black !important; border-radius: 0; color: white !important; font-weight: bold; background-color: #198754;">
          Search
        </button>
      </form>
      
    </div>
  </div>
</nav>
