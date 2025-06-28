<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM organisasi ORDER BY periode ASC");

echo '<div class="organisasi-grid">';
while ($row = mysqli_fetch_assoc($query)) {
  echo '<div class="organisasi-card">';
  echo '<img src="upload/' . htmlspecialchars($row['gambar']) . '" alt="' . htmlspecialchars($row['nama_organisasi']) . '">';
  echo '<h4>' . htmlspecialchars($row['nama_organisasi']) . '</h4>';
  echo '<p>' . htmlspecialchars($row['posisi']) . '</p>';
  echo '<small>Periode ' . htmlspecialchars($row['periode']) . '</small>';
  echo '</div>';
}
echo '</div>';
?>
