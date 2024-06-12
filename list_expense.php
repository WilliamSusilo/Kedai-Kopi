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
        <h1>History Pengeluaran Barang</h1>

        <!-- Menampilkan Data dari Database -->
        <table>
            <tr>
                <th>Tanggal Pengeluaran</th>
                <th>Jumlah Produk Keluar</th>
                <th>ID Gudang</th>
                <th>Kode Produk</th>
            </tr>
            <?php
            // Menampilkan Data
            $q = $db->query("SELECT * FROM expend");
            while($dt = $q->fetch_assoc()) :
            ?>
            <tr>
                <td><?= $dt['tanggal_pengeluaran']?></td>
                <td><?= $dt['jumlah_produk_keluar']?></td>
                <td><?= $dt['id_pegawai_gudang']?></td>
                <td><?= $dt['kode_produk']?></td>
            <?php endwhile;?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
