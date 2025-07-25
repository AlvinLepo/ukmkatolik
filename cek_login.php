<?php
include 'koneksi.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {
    $data = mysqli_fetch_assoc($result);

    if (password_verify($password, $data['password'])) {
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['npm']          = $data['npm'];
        $_SESSION['prodi']        = $data['prodi'];
        $_SESSION['email']        = $data['email'];
        $_SESSION['no_hp']        = $data['no_hp'];

        header("Location: dashboard.php");
    } else {
        echo "Password salah. <a href='index.php'>Coba lagi</a>";
    }
} else {
    echo "Email tidak ditemukan. <a href='index.php'>Coba lagi</a>";
}
?>