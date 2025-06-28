<?php if (isset($_GET['hapus'])): ?>
  <div style="background: #f44336; color: white; padding: 10px; text-align:center;">
    ✅ Data berhasil dihapus.
  </div>
<?php endif;

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Styled Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }
    body {
      background-color: #111;
      color: #fff;
      padding: 20px;
      padding-top: 100px;
    }
    .admin-header {
      position: fixed;
      top: 0; width: 100%;
      background-color: #7e8a93;
      color: #fff;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logout-link {
      font-weight: bold;
      color: red;
      text-decoration: none;
      font-size: 16px;
      background-color: transparent;
      border: 1px solid red;
      padding: 6px 12px;
      border-radius: 6px;
      transition: background 0.3s ease;
    }
    .logout-link:hover {
      background-color: red;
      color: white;
    }

    .section {
      background-color: #7e8a93;
      border: 1px solid #ccc;
      margin-bottom: 30px;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .section-title {
      background-color: #FCD8CD;
      color: #000;
      padding: 12px;
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 12px;
      border-radius: 5px;
      text-align: center;
    }

    .table-header, .item-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 12px;
    }

    .table-header {
      background-color: #5f6d75;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
    }

    .item-row {
      background-color: #6b7b85;
      border-bottom: 1px solid #999;
      border-radius: 4px;
      margin-top: 5px;
    }

    .item-row:hover {
      background-color: #8899a5;
    }

    .deskripsi, .aksi {
      flex: 1;
    }

    .aksi {
      text-align: right;
      display: flex;
      gap: 10px;
      justify-content: flex-end;
    }

    .tambah {
      background-color: #4CAF50;
      color: white;
      padding: 6px 12px;
      border-radius: 4px;
      margin-top: 12px;
      display: inline-block;
      font-size: 14px;
      text-decoration: none;
    }

    .icon-btn {
      padding: 4px 8px;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
      color: white;
    }

    .icon-btn.edit { background-color: #2196F3; }
    .icon-btn.delete { background-color: #f44336; }

    @media (max-width: 768px) {
      .admin-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .table-header, .item-row {
        flex-direction: column;
        align-items: flex-start;
      }
      .aksi {
        justify-content: flex-start;
      }
    }
  </style>
</head>
<body>

<div class="admin-header">
  <span>ADMIN PAGE</span>
  <a class="logout-link" href="logout.php">🔓 Logout</a>
</div>

<div id="app">
<?php
$sections = [
  'Proyek' => ['table' => 'proyek', 'field' => 'nama_proyek'],
  'Pengalaman' => ['table' => 'pengalaman', 'field' => 'deskripsi'],
  'Organisasi' => ['table' => 'organisasi', 'field' => 'nama_organisasi'],
  'Kemampuan' => ['table' => 'kemampuan', 'field' => 'nama'],
  'Pendidikan' => ['table' => 'pendidikan', 'field' => 'nama_sekolah'],
  'Hobi' => ['table' => 'hobi', 'field' => 'nama_hobi'],
  'Aktivitas' => ['table' => 'aktivitas', 'field' => 'nama_aktivitas'],
  'aboutme' => ['table' => 'aboutme', 'field' => 'deskripsi'],
];

foreach ($sections as $label => $info):
  $table = $info['table'];
  $field = $info['field'];
  $query = mysqli_query($conn, "SELECT * FROM $table ORDER BY id DESC");
?>
  <div class="section">
    <div class="section-title"><?= $label ?></div>
    <div class="table-header">
      <div class="deskripsi">Deskripsi</div>
      <div class="aksi">Aksi</div>
    </div>

    <?php while ($row = mysqli_fetch_assoc($query)): ?>
      <div class="item-row">
        <div class="deskripsi"><?= htmlspecialchars($row[$field]) ?></div>
        <div class="aksi">
          <a class="icon-btn edit" href="edit.php?tabel=<?= $table ?>&id=<?= $row['id'] ?>">Edit</a>
          <a class="icon-btn delete" href="hapus.php?tabel=<?= $table ?>&id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </div>
      </div>
    <?php endwhile; ?>

    <a href="tambah.php?tabel=<?= $table ?>" class="tambah">+ Tambah</a>
  </div>
<?php endforeach; ?>

<!-- Pesan Kontak -->
<div class="section">
  <div class="section-title">Pesan Kontak</div>
  <div class="table-header">
    <div class="deskripsi" style="flex: 0.8;">Nama</div>
    <div class="deskripsi" style="flex: 1.2;">Email</div>
    <div class="deskripsi" style="flex: 2;">Pesan</div>
    <div class="aksi">Aksi</div>
  </div>

  <?php
  $query_pesan = mysqli_query($conn, "SELECT * FROM pesan_kontak ORDER BY created_at DESC");
  while ($pesan = mysqli_fetch_assoc($query_pesan)):
  ?>
    <div class="item-row">
      <div class="deskripsi" style="flex: 0.8;"><?= htmlspecialchars($pesan['name']) ?></div>
      <div class="deskripsi" style="flex: 1.2;"><?= htmlspecialchars($pesan['email']) ?></div>
      <div class="deskripsi" style="flex: 2;"><?= htmlspecialchars($pesan['message']) ?></div>
      <div class="aksi">
        <a class="icon-btn delete" href="hapus_pesan.php?id=<?= $pesan['id'] ?>" onclick="return confirm('Yakin ingin menghapus pesan ini?')">Hapus</a>
      </div>
    </div>
  <?php endwhile; ?>
</div>

</div>
</body>
</html>
