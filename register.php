<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $npm = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (nama_lengkap, npm, prodi, email, no_hp, password)
              VALUES ('$nama_lengkap', '$npm', '$prodi', '$email', '$no_hp', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "Pendaftaran berhasil. <a href='index.php'>Login</a>";
    } else {
        echo "Gagal mendaftar: " . mysqli_error($koneksi);
    }
}
?>"

<form method="post" action="register.php">
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
    <input type="text" name="npm" placeholder="NPM" required>
    <input type="text" name="prodi" placeholder="Prodi" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="no_hp" placeholder="No HP" required>
    <input type="password" name="password" placeholder="Kata Sandi" required>
    <button type="submit">Daftar</button>
</form>
