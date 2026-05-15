<div class="list-group shadow-sm rounded">
  <div class="bg-dark text-white fw-bold py-3 ps-4 rounded-top">
    NAVIGASI
  </div>
  
  <a href="index.php?hal=home" class="list-group-item list-group-item-action ps-4">🏠 Beranda</a>
  
  <?php if(isset($_SESSION['USER'])): ?>
    <a href="index.php?hal=level_list" class="list-group-item list-group-item-action ps-4">📊 Data Level</a>
    <a href="index.php?hal=studies_list" class="list-group-item list-group-item-action ps-4">📚 Data Studies</a>
    
  <?php endif; ?>

  <?php if(!isset($_SESSION['USER']) || $_SESSION['USER']['role'] != 'staff'): ?>
    <a href="index.php?hal=about" class="list-group-item list-group-item-action fw-bold" style="border: 1px solid black;">
        <i class="bi bi-person-badge"></i> Tentang Saya
    </a>
  <?php endif; ?>
  <a href="index.php?hal=contact" class="list-group-item list-group-item-action ps-4 rounded-bottom">📱 Kontak</a>
</div>

<div class="card mt-3 border-0 shadow-sm" style="background: linear-gradient(135deg, #ffffff 0%, #f1f1f1 100%);">
  <div class="card-body text-center py-4">
    <h6 class="fw-bold mb-2" style="letter-spacing: 1px; font-size: 0.75rem; text-transform: uppercase; color: #000;">Daily Quote</h6>
    <span style="font-size: 2rem; color: #ddd; display: block; margin-bottom: -15px;">“</span>
    <p class="card-text mb-0" style="font-family: 'Georgia', serif; font-style: italic; color: #555; font-size: 1rem;">
      You were born to be real, not to be perfect. So, love yourself.
    </p>
    <span style="font-size: 2rem; color: #ddd; display: block; margin-top: -5px; margin-left: 90%;">”</span>
  </div>
</div>