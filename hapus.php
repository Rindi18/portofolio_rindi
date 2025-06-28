<?php
include 'koneksi.php';

$tabel = $_GET['tabel'] ?? '';
$id = intval($_GET['id'] ?? 0);

$daftar_tabel = ['proyek', 'pengalaman', 'organisasi', 'pendidikan', 'kemampuan', 'hobi', 'aktivitas', 'aboutme'];
if (!in_array($tabel, $daftar_tabel)) {
    die('Tabel tidak valid.');
}

// Pastikan data ada
$result = mysqli_query($conn, "SELECT * FROM $tabel WHERE id=$id");
if (!$result || mysqli_num_rows($result) === 0) {
    die("Data tidak ditemukan.");
}

// Hapus gambar jika ada
if (in_array($tabel, ['proyek', 'pengalaman', 'organisasi'])) {
    $row = mysqli_fetch_assoc($result);
    if (!empty($row['gambar'])) {
        $filePath = 'upload/' . $row['gambar'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}

// Hapus data dari database
$delete = mysqli_query($conn, "DELETE FROM $tabel WHERE id=$id");

if ($delete) {
    header("Location: admin.php?hapus=1");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
