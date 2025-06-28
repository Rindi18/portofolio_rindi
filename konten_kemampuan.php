<div class="konten-kemampuan">
  <ul>
    <?php
    $koneksi = new mysqli("localhost", "root", "", "portofolio");
    $kemampuan = $koneksi->query("SELECT * FROM kemampuan");
    while ($row = $kemampuan->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['nama']) . "</li>";
    }
    ?>
  </ul>
</div>
