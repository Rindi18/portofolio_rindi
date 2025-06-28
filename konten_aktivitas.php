<?php 
$koneksi = new mysqli("localhost", "root", "", "portofolio");
$aktivitas = $koneksi->query("SELECT * FROM aktivitas");
if ($aktivitas->num_rows > 0) {
    while ($row = $aktivitas->fetch_assoc()) {
        echo "<div class='aktivitas'>" . htmlspecialchars($row['nama_aktivitas']) . "</div>";
        echo "<div class='saya-saat-ini'>" . htmlspecialchars($row['deskripsi']) . "</div>";
    }
}
?>