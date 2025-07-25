<!DOCTYPE html>
<html>
<head>
    <title>Login & Registrasi UKM Katolik</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .form-box {
            width: 48%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Form Login -->
        <div class="form-box">
            <h2>Login</h2>
            <form method="post" action="cek_login.php">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                <button type="submit">Masuk</button>
            </form>
        </div>

        <!-- Form Registrasi -->
        <div class="form-box">
            <h2>Registrasi</h2>
            <form method="post" action="register.php">
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                <input type="text" name="npm" placeholder="NPM" required>
                <input type="text" name="prodi" placeholder="Prodi" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="no_hp" placeholder="No HP" required>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>
</body>
</html>
