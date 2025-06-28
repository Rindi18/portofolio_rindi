<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - Mardita Rindi</title>
  <link rel="stylesheet" href="assets/style.css" />
  <style>
    .contact-section {
      background-color: #1a1a1a;
      padding: 60px 30px;
      border-radius: 20px;
      max-width: 1200px;
      margin: 120px auto 60px;
      color: white;
      text-align: center;
    }

    .contact-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .contact-section p {
      font-size: 18px;
      margin-bottom: 40px;
      color: #ccc;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 600px;
      margin: 0 auto 40px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 15px;
      border-radius: 10px;
      border: none;
      font-size: 18px;
      background-color: #9bc1cc;
      color: #000;
      resize: none;
    }

    .contact-form button {
      padding: 15px;
      font-size: 20px;
      font-weight: bold;
      background-color: #DE1D97;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      text-transform: uppercase;
    }

    .service-table {
      margin-top: 40px;
      background-color: #7e8a93;
      padding: 30px;
      border-radius: 20px;
    }

    .service-table table {
      width: 100%;
      border-collapse: collapse;
      color: white;
      font-size: 16px;
    }

    .service-table th,
    .service-table td {
      padding: 12px 10px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .service-table th {
      background-color: #6d7b83;
    }

    @media (max-width: 768px) {
      .contact-form {
        width: 100%;
      }

      .service-table table {
        font-size: 14px;
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

  <!-- Konten Kontak -->
  <div class="contact-section">
    <h2>Contact Us</h2>
    <p>Feel free to contact us at anytime. We will get back as soon as possible.</p>

    <form class="contact-form" id="contactForm" action="proses_contact.php" method="POST">
      <input type="text" name="name" id="name" placeholder="Name" required />
      <input type="email" name="email" id="email" placeholder="Email Address" required />
      <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
      <button type="submit">Send Now</button>
    </form>

    <!-- Tabel Jasa -->
    <div class="service-table">
      <table>
        <thead>
          <tr>
            <th>Jasa/Layanan</th>
            <th>Estimasi Harga/Fee</th>
            <th>Service Fee/Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Desain Web</td>
            <td>Rp 300.000 – Rp 750.000</td>
            <td>Custom UI Desain</td>
          </tr>
          <tr>
            <td>Website</td>
            <td>Rp 300.000 – Rp 700.000</td>
            <td>Basic Website</td>
          </tr>
          <tr>
            <td>Laporan</td>
            <td>Rp 700.000 – Rp 1.500.000</td>
            <td>Laporan Akademik</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function goToLogin() {
      window.location.href = "login.php";
    }

    document.getElementById('contactForm').addEventListener('submit', function(e) {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (name.length < 3) {
        alert("Nama harus minimal 3 huruf.");
        e.preventDefault();
        return;
      }

      if (!emailRegex.test(email)) {
        alert("Format email tidak valid.");
        e.preventDefault();
        return;
      }

      if (message.length < 10) {
        alert("Pesan harus minimal 10 huruf.");
        e.preventDefault();
        return;
      }
    });
  </script>

</body>
</html>
