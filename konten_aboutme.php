<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM aboutme LIMIT 1");
$data = mysqli_fetch_assoc($query);
echo "<div class='deskripsi-aboutme'>".nl2br(htmlspecialchars($data['deskripsi']))."</div>";
?>
