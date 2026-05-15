<!-- Bagian atas file about.php -->
<style>
  /* Menghitamkan garis sidebar navigasi */
  .list-group-item {
    border-color: #343a40 !important;
  }

  /* Menghitamkan garis kotak accordion */
  .accordion-item {
    border: 1px solid #343a40 !important;
  }

  /* Menghitamkan garis di bawah tombol accordion */
  .accordion-button {
    border-bottom: 1px solid #343a40 !important;
  }

  .card {
    border: 1px solid #343a40 !important;
  }

  /* Menghitamkan seluruh bingkai accordion */
  .accordion {
      border: 1px solid #343a40 !important;
      border-radius: 0.5rem; /* Biar sudutnya tetap melengkung rapi */
      overflow: hidden;
  }

  /* Menghitamkan garis pembatas antar item */
  .accordion-item {
      border-bottom: 1px solid #343a40 !important;
      border-top: none !important;
      border-left: none !important;
      border-right: none !important;
  }

  /* Menghapus garis terakhir agar tidak dobel */
  .accordion-item:last-child {
      border-bottom: none !important;
  }

  /* Membuat teks menu di dalam navigasi (sidebar) jadi hitam */
  .list-group-item, 
  .list-group-item a {
    color: #000000 !important;
    text-decoration: none;
  }

  /* Menghitamkan teks isi di dalam Accordion */
  .accordion-body {
    color: #000000 !important;
  }

  /* Menghitamkan teks judul accordion saat tertutup */
  .accordion-button.collapsed {
    color: #000000 !important;
  }

  /*Menghitamkan teks di kotak Current Project */
  .card-body {
    color: #000000 !important;
  }

  

</style>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        1. Hobby
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>"Selain sibuk ngoding, aku juga suka banget sama dunia kreatif dan hiburan. Sebagai anak K-Pop, dengerin musik itu jadi 'obat' paling ampuh buat balikin mood kalau lagi pusing liat barisan kode seharian.
            Pas lagi santai, aku biasanya lanjut nonton drama Korea. Buatku, nonton drakor itu bukan cuma hiburan biasa, tapi juga cara buat belajar memahami sifat orang dan ngeliat hidup dari berbagai sudut pandang yang beda-beda."
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        2. Favorite Menu
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Kalau urusan makanan, jujur aku bukan tipe yang pilih-pilih. Selagi makanannya halal dan kelihatan enak, pasti aku sikat dengan lahap! Aku nggak punya satu menu yang jadi favorit banget, soalnya menurutku tiap makanan punya rasa unik yang sayang kalau nggak dicoba. Tapi, se-doyan apa pun aku, tetep ada 'musuh bebuyutan' yang nggak bisa aku makan, yaitu jengkol, pete, dan durian. Buatku, aroma mereka terlalu tajam dan bikin aku nyerah duluan. Tapi tenang aja, selain itu bertiga aku bisa makan semua kok.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3. Organizational Experience
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p> <strong>a. GenQ (Divisi Tahsin – Bagian Pembinaan):</strong> <br>

              - Aktif dalam kegiatan pembinaan dan berbagi ilmu melalui Divisi Tahsin. <br>

              - Mengembangkan kemampuan komunikasi yang baik dalam berinteraksi dengan sesama anggota. <br><br>

            <strong>b. BKPK (Bendahara)</strong> <br>
              - Bertanggung jawab penuh dalam mengelola keuangan dan administrasi organisasi. <br>

              - Melatih ketelitian, disiplin, dan transparansi agar semua program kerja tim berjalan sukses.
      </div>
    </div>
  </div>
</div>