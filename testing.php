<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Dashboard</title>
    <link rel="stylesheet" href="css/tambah-pesanan.css">
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <!-- Sidebar content -->
            <h2>ADMIN</h2>
            <a href="tambah-pesanan.html" class="active">Pesanan Jahitan</a>
            <a href="data-pesanan.php" class="active">Data Jahitan</a>
            <a href="tambah-penjahit.html" class="active">Tambah Penjahit</a>
            <!-- Other sidebar items -->
        </div>

        <body>
            <h1>Tambah Akun Karyawan</h1>
            <form action="tambah-penjahit.php" method="POST">
                <label for="username">Usename</label>
                <input type="text" name="username" required><br>

                <label for="password">Password</label>
                <input type="text" name="password" required><br>

                <label for="akses">Akses</label>
                <input type="text" name="akses" required><br>

                <input type="submit" value="Tambah">
            </form>
        </body>
    </div>
    </div>
</body>

</html>