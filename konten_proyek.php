<?php
include 'koneksi.php';
$proyek = $koneksi->query("SELECT * FROM proyek");

echo '<div class="grid-proyek">';
while ($row = $proyek->fetch_assoc()) {
    echo '<div class="proyek-item">';
    echo '<img src="upload/' . htmlspecialchars($row['gambar']) . '" alt="gambar proyek">';
    echo '<h3>' . htmlspecialchars($row['nama_proyek']) . '</h3>';
    echo '<p>' . htmlspecialchars($row['deskripsi']) . '</p>';
    echo '</div>';
}
echo '</div>';
?>
