<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM pengalaman");

echo '<div class="pengalaman-items">';
while ($row = mysqli_fetch_assoc($query)) {
  echo '<div class="pengalaman-item">';
  echo '<img src="upload/' . htmlspecialchars($row['gambar']) . '" alt="Pengalaman">';
  echo '<p>' . htmlspecialchars($row['deskripsi']) . '</p>';
  if (!empty($row['tahun'])) {
    echo '<small>Tahun: ' . htmlspecialchars($row['tahun']) . '</small>';
  }
  echo '</div>';
}
echo '</div>';
?>
