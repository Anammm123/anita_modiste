<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Dashboard</title>
    <link rel="stylesheet" href="css/tambah-pesanan.css">
    <link rel="stylesheet" href="css/data-pesanan.css">
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <!-- Sidebar content -->
            <h2>ADMIN</h2>
            <a href="tambah-pesanan.html" class="active">Pesanan Jahitan</a>
            <a href="data-pesanan.php" class="active">Data Jahitan</a>
            <!-- Other sidebar items -->
        </div>
        <div class="main-content">
            <h3>Data Jahitan</h3>
            <div class="form-container">
                <?php
                require_once("koneksi.php");

                $koneksi = mysqli_connect($host, $username, $password, $database);

                if (!$koneksi) {
                    die("Koneksi ke database gagal: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM pesanan_jahitan";
                $result = mysqli_query($koneksi, $query);
                ?>

                <html>

                <head>

                </head>


                <body>
                    <!-- Tambahkan struktur HTML Anda di sini -->
                    <table>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat Pelanggan</th>
                            <th>Nomer Telepon</th>
                            <th>Desain</th>
                            <th>Bahan</th>
                            <th>Ukuran</th>
                            <th>Jumlah</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["id_pesan"] . "</td>";
                            echo "<td>" . $row["customer_name"] . "</td>";
                            echo "<td>" . $row["customer_address"] . "</td>";
                            echo "<td>" . $row["nomer_telepon"] . "</td>";
                            echo "<td>" . $row["desain"] . "</td>";
                            echo "<td>" . $row["bahan"] . "</td>";
                            echo "<td>" . $row["ukuran"] . "</td>";
                            echo "<td>" . $row["jumlah"] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </body>

                </html>

                <?php
                mysqli_close($koneksi);
                ?>


            </div>


        </div>

    </div>
</body>

</html>