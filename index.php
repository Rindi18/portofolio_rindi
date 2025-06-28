<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio Mardita Rindi</title>
  <link rel="stylesheet" href="assets/style.css" />
 
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar container">
    <div class="logo">R</div>
    <div class="menu">
      <a href="index.php">HOME</a>
      <a href="#about">ABOUT</a>
      <a href="article.php">ARTICLE</a>
      <a href="contact.php">CONTACT</a>
    </div>
     <div class="user-menu" onclick="goToLogin()" title="Login Admin">
      <img src="assets/images/ikonuser_84234.png" alt="User Icon" />
    </div>
  </nav>

  <div class="container">
    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-text">
        <h1>
          Selamat Datang!<br />
          Saya <span class="highlight">Mardita Rindi</span><br />
          Desainer Visual
        </h1>
        <a href="#about" class="btn-details">Lihat Detail</a>
      </div>

      <div class="hero-img-container">
        <div class="rectangle-4"></div>
        <div class="hero-img">
          <img src="assets/images/rindi0.png" alt="Foto Profil" />
        </div>
      </div>
    </section>

    <!-- About Me -->
    <section id="about" class="about-me section-box">
      <h2>ABOUT ME</h2>
      <p>
        Saya adalah mahasiswa Teknik Informatika di Universitas Maritim Raja Ali Haji
        yang fokus pada desain antarmuka pengguna (UI Design). Saya senang menciptakan tampilan aplikasi yang menarik, fungsional, dan mudah digunakan.
      </p>
    </section>

    <!-- Tiga Kolom -->
    <section class="three-columns">
      <div class="column">
        <h3>Kemampuan</h3>
        <?php include 'konten_kemampuan.php'; ?>
      </div>
      <div class="column">
        <h3>Pendidikan</h3>
        <?php include 'konten_pendidikan.php'; ?>
      </div>
      <div class="column">
        <h3>Hobi</h3>
        <?php include 'konten_hobi.php'; ?>
      </div>
    </section>

    <!-- Aktivitas -->
    <section class="aktivitas section-box">
      <h2>Aktivitas</h2>
      <?php include 'konten_aktivitas.php'; ?>
    </section>
        <!-- Pengalaman -->
        <section class="pengalaman section-box">
          <h2>Pengalaman</h2>
          <?php include 'konten_pengalaman.php'; ?>
          
        </section>

        <!-- Organisasi -->
        <section class="organisasi section-box">
          <h2>Organisasi</h2>
          <?php include 'konten_organisasi.php'; ?>
          
        </section>

        <!-- Proyek -->
        <section class="proyek section-box">
          <h2>Project & Desain Web</h2>
          <?php include 'konten_proyek.php'; ?>
        
        </section>
  
  </div>
  <script>
    function goToLogin() {
      window.location.href = "login.php";
    }
  </script>
</body>
</html>
