<?php
include 'koneksi.php';

$tabel = $_GET['tabel'] ?? '';

$fields = [
  'proyek' => ['nama_proyek','deskripsi', 'gambar'],
  'pengalaman' => ['deskripsi','tahun', 'gambar'],
  'organisasi' => ['nama_organisasi', 'posisi', 'periode', 'gambar'],
  'kemampuan' => ['nama'],
  'pendidikan' => ['nama_sekolah'],
  'hobi' => ['nama_hobi'],
  'aktivitas' => ['nama_aktivitas', 'deskripsi'],
  'aboutme' => ['konten']
];

if (!isset($fields[$tabel])) {
  echo "Tabel tidak dikenali.";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $columns = [];
  $values = [];

  foreach ($fields[$tabel] as $field) {
    if ($field === 'gambar' && isset($_FILES['gambar']) && $_FILES['gambar']['size'] > 0) {
      $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
      $filename = uniqid() . '.' . $ext;
      $tmp = $_FILES['gambar']['tmp_name'];
      $tujuan = "upload/" . $filename;

      $allowed = ['jpg', 'jpeg', 'png', 'gif'];
      if (!in_array(strtolower($ext), $allowed)) {
        die("Tipe file tidak diizinkan.");
      }

      if (!move_uploaded_file($tmp, $tujuan)) {
        die("Gagal upload file ke folder 'upload/'.");
      }

      $columns[] = "gambar";
      $values[] = "'" . $filename . "'";
    } elseif ($field !== 'gambar') {
      $columns[] = $field;
      $values[] = "'" . mysqli_real_escape_string($conn, $_POST[$field]) . "'";
    }
  }

  $sql = "INSERT INTO $tabel (" . implode(',', $columns) . ") VALUES (" . implode(',', $values) . ")";
  if (mysqli_query($conn, $sql)) {
    header("Location: admin.php?success=1");
    exit;
  } else {
    echo "Gagal menyimpan: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah <?= ucwords(str_replace('_', ' ', $tabel)); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      padding: 40px;
    }
    .form-box {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"], textarea, input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-top: 6px;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      margin-top: 20px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #388e3c;
    }
    .back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Tambah ke: <?= ucwords(str_replace('_', ' ', $tabel)); ?></h2>
    <form method="POST" enctype="multipart/form-data">
      <?php foreach ($fields[$tabel] as $field): ?>
        <label><?= ucwords(str_replace('_', ' ', $field)); ?>:</label>
        <?php if ($field === 'gambar'): ?>
          <input type="file" name="gambar" accept="image/*">
        <?php elseif (strlen($field) > 20 || str_contains($field, 'deskripsi') || str_contains($field, 'konten')): ?>
          <textarea name="<?= $field; ?>" required></textarea>
        <?php else: ?>
          <input type="text" name="<?= $field; ?>" required>
        <?php endif; ?>
      <?php endforeach; ?>
      <button type="submit">Simpan</button>
    </form>
    <a href="admin.php" class="back-link">← Kembali ke Admin</a>
  </div>
</body>
</html>
