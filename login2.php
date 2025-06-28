<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $data = mysqli_fetch_assoc($result);

    // Bandingkan password input dengan hash dari database
    if (password_verify($password, $data['password'])) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Password salah.'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan.'); window.location='login.php';</script>";
}
?>
