<?php
include 'koneksi.php';

$tabel = $_GET['tabel'] ?? '';
$id = intval($_GET['id'] ?? 0);

$daftar_tabel = ['proyek', 'pengalaman', 'organisasi', 'pendidikan', 'kemampuan', 'hobi', 'aktivitas', 'aboutme'];
if (!in_array($tabel, $daftar_tabel)) {
    die("Tabel tidak valid.");
}

$query = mysqli_query($conn, "SELECT * FROM $tabel WHERE id=$id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $update_fields = [];

    foreach ($_POST as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $update_fields[] = "$key='$value'";
    }

    // Jika upload gambar baru
    if (!empty($_FILES['gambar']['name'])) {
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array(strtolower($ext), $allowed)) {
            die("Tipe gambar tidak didukung.");
        }

        $newName = uniqid() . '.' . $ext;
        $target = "upload/$newName";

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
            $update_fields[] = "gambar='$newName'";
        }
    }

    $sql = "UPDATE $tabel SET " . implode(",", $update_fields) . " WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php?updated=1");
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit <?= ucwords($tabel) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f7f7f7;
      padding: 40px;
    }
    .form-container {
      max-width: 700px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 24px;
    }
    label {
      display: block;
      margin-top: 16px;
      font-weight: bold;
    }
    input[type="text"], textarea, input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    img.preview {
      margin-top: 10px;
      max-height: 150px;
      display: block;
    }
    button {
      margin-top: 20px;
      background-color: #2196F3;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #1976d2;
    }
    a.back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit: <?= ucwords(str_replace('_', ' ', $tabel)) ?></h2>
    <form method="POST" enctype="multipart/form-data">
      <?php foreach ($data as $key => $val): ?>
        <?php if ($key === 'id') continue; ?>
        <label><?= ucwords(str_replace('_', ' ', $key)) ?>:</label>
        <?php if ($key === 'gambar'): ?>
          <input type="file" name="gambar" accept="image/*">
          <?php if (!empty($val)): ?>
            <img src="upload/<?= $val ?>" class="preview">
          <?php endif; ?>
        <?php elseif (strlen($val) > 100 || str_contains($key, 'deskripsi') || str_contains($key, 'konten')): ?>
          <textarea name="<?= $key ?>"><?= htmlspecialchars($val) ?></textarea>
        <?php else: ?>
          <input type="text" name="<?= $key ?>" value="<?= htmlspecialchars($val) ?>">
        <?php endif; ?>
      <?php endforeach; ?>
      <button type="submit">Update</button>
    </form>
    <a href="admin.php" class="back-link">← Kembali ke Admin</a>
  </div>
</body>
</html>
