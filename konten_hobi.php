<?php 
$koneksi = new mysqli("localhost", "root", "", "portofolio");
$hobi = $koneksi->query("SELECT * FROM hobi");
if ($hobi->num_rows > 0) {
    while ($row = $hobi->fetch_assoc()) {
        echo "<div>" . htmlspecialchars($row['nama_hobi']) . "</div>";
    }
}
?>
