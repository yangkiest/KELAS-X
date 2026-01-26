<?php
// NAV & TITLE
$nav = ['Home', 'Profil', 'VisiMisi', 'Kegiatan', 'Prestasi'];
$judulNavbar = "SMPN 23 DEPOK";

// ====== PROFIL ======
$logo = "img/logosmpn23png.jpg";
$heroImg = "img/PAGERSMPN23.png";
$namaSekolah = "SMP NEGERI 23 DEPOK";
$kepalaSekolah = "Sukmawaty Zulkifli, S.Pd., M.Pd.";
$wakil = "(tidak tercantum di web)";
$alamat = "Jl. Jambore Gg. Masjid No.29, Harjamukti, Cimanggis, Kota Depok, Jawa Barat";
$akreditasi = "B";
$status = "Negeri";
$skPendirian = "SK No. 903/245/Kpts/Disdik/Huk/2 (26 Nov 2014)";
$slogan = "BERSINAR";

// ====== VISI & MISI ======
$visi = "Terwujudnya peserta didik yang unggul, berkarakter, kreatif, inovatif serta berwawasan lingkungan.";
$misi = [
  "Menegakkan peraturan sekolah kepada seluruh warga sekolah.",
  "Meningkatkan prestasi akademik dan non-akademik.",
  "Meningkatkan kualitas SDM pendidik dan tenaga kependidikan.",
  "Membangun dan mengembangkan sarana & prasarana serta sumber belajar.",
  "Menciptakan suasana sekolah religius, santun, dan kekeluargaan.",
  "Membangun karakter akhlak mulia dan kerjasama dengan lingkungan."
];

// ====== KEGIATAN ======
$kegiatan = [
  ["Edukasi Gizi Seimbang: Cegah Anemia", "img/giziseimbang.png", "Edukasi bersama PGN, Puskesmas Harjamukti & RS Melia untuk pencegahan anemia remaja putri."],
  ["Peringatan Maulid Nabi", "img/maulidan.png", "Peringatan Maulid Nabi Muhammad SAW dengan ceramah dan doa bersama."],
  ["Workshop Sekolah Aman Bicara", "img/amanbicara.jpeg", "Workshop pencegahan kekerasan seksual bekerja sama dengan Pemimpin ID Depok."],
  ["Jumat Litnum (Literasi & Numerasi)", "img/litnum.png", "Program rutin Jumat untuk menguatkan budaya literasi & numerasi."],
  ["Panen Karya Projek P5", "img/sinergi.png", "Pameran hasil projek siswa sebagai implementasi Projek P5."],
  ["Pesantren Kilat (Ramadhan)", "img/pesantren.png", "Pembinaan karakter keagamaan selama bulan Ramadhan."],
];

// ====== PRESTASI ======
$prestasiList = [
  "Juara 4 FLS2N Mencipta Lagu - Tingkat Kota (2016)",
  "Juara 2 Pasanggiri Kawih Sunda Putra - Tingkat Kota (2017)",
  "Juara 1 Paskibraka Regional Bekasi (2018)",
  "Juara 2 Taekwondo Kapolri Cup 2 - Nasional (2019)",
  "Borong medali Sprint Swimming Challenge Student Open (2025)"
];
$prestasiImg = "img/prestasi23.jpg";
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($judulNavbar) ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root { --primary: #0d6efd; --accent: #198754; }
    body { font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; background: #fbfcfd; color:#222; }
    .brand { letter-spacing: .6px; font-weight:700; color:var(--primary); }

    /* Card dan layout */
    .card-school { background: linear-gradient(180deg,#f6fff7,#ebfff0); border-radius: 12px; }
    .slogan { font-weight:700; color: var(--accent); }
    #kegiatan .card-img-top { width:100%; height:220px; object-fit:cover; }
    #kegiatan .card:hover { transform: translateY(-6px); transition:.22s; box-shadow:0 10px 24px rgba(0,0,0,0.08); }
    footer { background:#f8f9fa; padding:24px 0; margin-top:40px; color:#444; }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand brand" href="#home"><?= htmlspecialchars($judulNavbar) ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <div class="navbar-nav ms-auto">
          <?php foreach($nav as $n): ?>
            <a class="nav-link px-3" href="#<?= strtolower($n) ?>"><?= $n ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- HERO IMAGE -->
  <section id="home">
    <img src="<?= $heroImg ?>" alt="Tampak depan SMPN 23 Depok" class="w-100">
  </section>

  <!-- MAIN CONTENT -->
  <main class="container my-5">

    <!-- PROFIL -->
    <section id="profil" class="mb-5">
      <h2 class="text-center fw-bold mb-4">Profil Sekolah</h2>
      <div class="row align-items-center g-4">
        <div class="col-md-5 text-center">
          <img src="<?= $logo ?>" class="img-fluid mb-3" style="max-height:110px;" alt="Logo <?= htmlspecialchars($namaSekolah) ?>">
          <h4 class="fw-bold"><?= htmlspecialchars($namaSekolah) ?></h4>
          <p class="slogan mb-0"><?= htmlspecialchars($slogan) ?></p>
        </div>

        <div class="col-md-7">
          <div class="card card-school p-3 shadow-sm">
            <div class="row">
              <div class="col-6">
                <p class="mb-1"><strong>Kepala Sekolah</strong><br><?= htmlspecialchars($kepalaSekolah) ?></p>
                <p class="mb-1"><strong>Wakil</strong><br><?= htmlspecialchars($wakil) ?></p>
                <p class="mb-1"><strong>Akreditasi</strong><br><?= htmlspecialchars($akreditasi) ?></p>
              </div>
              <div class="col-6">
                <p class="mb-1"><strong>Alamat</strong><br><?= htmlspecialchars($alamat) ?></p>
                <p class="mb-1"><strong>Status</strong><br><?= htmlspecialchars($status) ?></p>
                <p class="mb-1"><strong>SK Pendirian</strong><br><?= htmlspecialchars($skPendirian) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- VISI & MISI -->
    <section id="visimisi" class="mb-5">
      <h2 class="text-center fw-bold mb-4">Visi & Misi</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card h-100 p-4 border-0 shadow-sm">
            <h5 class="text-success fw-bold mb-3">VISI</h5>
            <p><?= htmlspecialchars($visi) ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100 p-4 border-0 shadow-sm">
            <h5 class="text-success fw-bold mb-3">MISI</h5>
            <ul>
              <?php foreach($misi as $m): ?>
                <li><?= htmlspecialchars($m) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- KEGIATAN -->
    <section id="kegiatan" class="mb-5">
      <h2 class="text-center fw-bold mb-4">Kegiatan Sekolah</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach($kegiatan as $k): ?>
          <div class="col">
            <div class="card h-100 shadow-sm">
              <img src="<?= $k[1] ?>" class="card-img-top" alt="<?= htmlspecialchars($k[0]) ?>">
              <div class="card-body">
                <h5 class="card-title fw-bold"><?= htmlspecialchars($k[0]) ?></h5>
                <p class="card-text"><?= htmlspecialchars($k[2]) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- PRESTASI -->
    <section id="prestasi" class="mb-5">
      <h2 class="text-center fw-bold mb-4">Prestasi Sekolah</h2>
      <div class="row g-4 align-items-center">
        <div class="col-md-5 text-center">
          <img src="<?= $prestasiImg ?>" class="img-fluid rounded shadow-sm" alt="Prestasi <?= htmlspecialchars($namaSekolah) ?>">
        </div>
        <div class="col-md-7">
          <ul class="list-group list-group-flush">
            <?php foreach($prestasiList as $p): ?>
              <li class="list-group-item"><?= htmlspecialchars($p) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

  </main>

  <footer>
    <div class="container text-center">
      <p class="mb-1"><strong><?= htmlspecialchars($namaSekolah) ?></strong> — <?= htmlspecialchars($alamat) ?> | Akreditasi: <?= htmlspecialchars($akreditasi) ?></p>
      <small>Data dirangkum & diolah dari situs resmi SMPN 23 Depok.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

