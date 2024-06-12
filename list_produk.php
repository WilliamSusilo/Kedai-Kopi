<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1>List Produk</h1>

        <!-- Menampilkan Data dari Database -->
        <table>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Bentuk Produk</th>
                <th>Satuan Produk</th>
                <th>Merk</th>
                <th>Jumlah Produk</th>
                <th>Tingkat Kafein</th>
            </tr>
            <?php
            // Menampilkan Data
            $q = $db->query("SELECT * FROM produk");
            while($dt = $q->fetch_assoc()) :
            ?>
            <tr>
                <td><?= $dt['kode_produk']?></td>
                <td><?= $dt['nama_produk']?></td>
                <td><?= $dt['jenis_produk']?></td>
                <td><?= $dt['bentuk_produk']?></td>
                <td><?= $dt['satuan_produk']?></td>
                <td><?= $dt['merk']?></td>
                <td><?= $dt['jumlah_produk']?></td>
                <td><?= $dt['tingkat_kafein']?></td>
            <?php endwhile;?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
