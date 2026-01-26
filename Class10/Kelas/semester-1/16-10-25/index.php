
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 2 BUDURAN</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"\>
    
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm sticky-top">
  <div class="container-fluid">
    <!-- Logo dan Brand -->
    <a class="navbar-brand d-flex align-items-center" href="#home">
      <img src="img/Logo_SMENDA.jpg" alt="Logo" 
           style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin-right:15px;">
      <span class="fs-4 text-white fw-bold">SMKN 2 BUDURAN</span>
    </a>

    <!-- Toggler untuk tampilan mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=sejarah">Sejarah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=jurusan">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=prestasi">Prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=kegiatan">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?menu=kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


        <!-- Section -->
        <section>

            <?php 

                if(isset($_GET['menu'])) 
                {
                    $isi = $_GET['menu'];
                    
                    if ($isi == "sejarah") {
                        require_once "pages/Sejarah.php";

                    }
                    if ($isi == "profil") {
                        require_once "pages/Profil.php";

                    }
                    if ($isi == "jurusan") {
                        require_once "pages/Jurusan.php";

                    }
                    if ($isi == "prestasi") {
                        require_once "pages/Prestasi.php";

                    }
                    if ($isi == "kegiatan") {
                        require_once "pages/Kegiatan.php";
                    }
                    if ($isi == "kontak") {
                        require_once "pages/Kontak.php";
                    }
                    
                } else{
                    require_once "pages/Profil.php";
                } 

                if (isset($_POST['Tombol'])) {
                    $nama = $_POST['nama'];
                    $pesan = $_POST['Pesan'];
                    $email = $_POST['Email'];

                    echo "Nama : $nama <br>";
                    echo "Pesan : $pesan <br>";
                    echo "Email : $email <br>";
                    
                }

            ?>

        </section>

        <!-- Footer -->
            <footer class="bg-light text-center py-3 mt-5 border-top">
                 <small class="text-muted">Dibuat dengan cinta. Informasi resmi berdasarkan hasil riset langsung dari sumber terpercaya.</small>
            </footer>

    </div>
</body>
</html>