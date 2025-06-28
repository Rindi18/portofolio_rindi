<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $delete = mysqli_query($conn, "DELETE FROM pesan_kontak WHERE id = $id");

    if ($delete) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Gagal menghapus pesan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
