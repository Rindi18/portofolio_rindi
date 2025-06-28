<?php 
$koneksi = new mysqli("localhost", "root", "", "portofolio");
$pendidikan = $koneksi->query("SELECT * FROM pendidikan ORDER BY tahun_mulai ASC");
if ($pendidikan->num_rows > 0) {
    while ($row = $pendidikan->fetch_assoc()) {
        echo "<div><strong>" . htmlspecialchars($row['jenjang']) . ":</strong> " 
            . htmlspecialchars($row['nama_sekolah']) . " (" 
            . $row['tahun_mulai'] . " - " . $row['tahun_selesai'] . ")</div>";
    }
}
?>
