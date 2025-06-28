<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Article - Mardita Rindi</title>
  <link rel="stylesheet" href="assets/style.css" />
  <style>
    .article-content {
      background-color: #1a1a1a;
      padding: 50px;
      border-radius: 20px;
      margin: 100px auto 60px;
      color: #fff;
      max-width: 1200px;
    }

    .article-content h2 {
      text-align: center;
      font-size: 36px;
      margin-bottom: 30px;
      color: #fff;
    }

    .article-content p {
      font-size: 18px;
      color: #ddd;
      line-height: 1.6;
      text-align: center;
      margin-bottom: 40px;
    }

    .grid-article {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .article-card {
      background-color: #7e8a93;
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      color: #fff;
      box-shadow: 0 0 10px rgba(255,255,255,0.1);
      transition: transform 0.3s ease;
    }

    .article-card:hover {
      transform: scale(1.03);
    }

    .article-card img {
      width: 100%;
      height: 200px;
      object-fit: contain;
      border-radius: 15px;
      background-color: #fff;
      margin-bottom: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .article-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .article-card p {
      font-size: 16px;
      margin-bottom: 10px;
      color: #e0e0e0;
    }

    .article-card a.btn-details {
      background-color: #d26eb9;
      padding: 10px 20px;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .article-card a.btn-details:hover {
      background-color: #b44a9e;
    }

    @media (max-width: 768px) {
      .article-content {
        padding: 30px 15px;
      }

      .article-content h2 {
        font-size: 28px;
      }

      .grid-article {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar container">
    <div class="logo">R</div>
    <div class="menu">
      <a href="index.php">HOME</a>
      <a href="index.php#about">ABOUT</a>
      <a href="article.php">ARTICLE</a>
      <a href="contact.php">CONTACT</a>
    </div>
    <div class="user-menu" onclick="goToLogin()" title="Login Admin">
      <img src="assets/images/ikonuser_84234.png" alt="User Icon" />
    </div>
  </nav>

  <!-- Artikel Konten -->
  <div class="article-content">
    <h2>Latest Articles</h2>
    <p>
      Beragam tips, tutorial pemula, dan wawasan tentang desain web, UI/UX, serta pengembangan portofolio disajikan untuk membantu pelajar dan pemula memahami prinsip dasar desain dan mengasah keterampilan front-end melalui praktik nyata dan penjelasan yang mudah dipahami.
    </p>

    <div class="grid-article">

      <!-- Kartu Artikel 1 -->
      <div class="article-card">
        <img src="assets/images/blogs-cards0.png" alt="Artikel 1">
        <h3>Apa itu UX Design?</h3>
        <p>Pemahaman dasar tentang UX dan perbedaannya dengan UI.</p>
        <a href="https://www.hostinger.com/id/tutorial/ux-design-adalah" target="_blank" class="btn-details">Read More</a>
      </div>

      <!-- Kartu Artikel 2 -->
      <div class="article-card">
        <img src="assets/images/blogs-cards0.png" alt="Artikel 2">
        <h3>Portofolio Web HTML & CSS</h3>
        <p>Cara membuat portofolio sederhana dengan HTML dan CSS.</p>
        <a href="https://sko.dev/snippet/cara-membuat-web-portofolio-dengan-html-dan-css" target="_blank" class="btn-details">Read More</a>
      </div>

      <!-- Kartu Artikel 3 -->
      <div class="article-card">
        <img src="assets/images/blogs-cards0.png" alt="Artikel 3">
        <h3>Kesalahan dalam UI Design</h3>
        <p>Kesalahan umum saat membuat desain UI dan cara menghindarinya.</p>
        <a href="https://grafisify.com/kesalahan-umum-dalam-ui-design-dan-cara-menghindarinya/" target="_blank" class="btn-details">Read More</a>
      </div>

    </div>
  </div>

  <script>
    function goToLogin() {
      window.location.href = "login.php";
    }
  </script>

</body>
</html>
