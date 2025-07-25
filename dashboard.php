<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard UKM Katolik</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['nama_lengkap']; ?>!</h2>
    <ul>
        <li><strong>NPM:</strong> <?php echo $_SESSION['npm']; ?></li>
        <li><strong>Prodi:</strong> <?php echo $_SESSION['prodi']; ?></li>
        <li><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
        <li><strong>No HP:</strong> <?php echo $_SESSION['no_hp']; ?></li>
    </ul>
    <a href="logout.php">Keluar</a>
</body>
</html>