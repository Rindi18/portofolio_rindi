<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid'); history.back();</script>";
        exit;
    }

    // Simpan ke database
    $sql = "INSERT INTO pesan_kontak (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Pesan berhasil dikirim dan disimpan!'); window.location='contact.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan pesan'); history.back();</script>";
    }
}
?>
