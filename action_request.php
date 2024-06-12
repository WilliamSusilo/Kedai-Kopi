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
        <h1>Aksi Pengeluaran Barang</h1>

        <!-- Menampilkan Data dari Database -->
        <table>
            <tr>
                <th>Tanggal Permintaan</th>
                <th>Jumlah Produk Diminta</th>
                <th>ID Front Office</th>
                <th>Kode Produk</th>
                <th>Aksi</th>
            </tr>
            <?php
            // Query untuk mengambil data permintaan barang yang belum diproses (belum ada di tabel expend)
            $q = $db->query("SELECT * FROM demand 
            WHERE kode_produk NOT IN (SELECT kode_produk FROM expend)");
            while($dt = $q->fetch_assoc()) :
            ?>
            <tr>
                <td><?= $dt['tanggal_permintaan']?></td>
                <td><?= $dt['jumlah_produk_diminta']?></td>
                <td><?= $dt['id_front_office']?></td>
                <td><?= $dt['kode_produk']?></td>                
                <td><a class="expense" href="expense.php?transaksi_permintaan_ID=<?= $dt['transaksi_permintaan_ID'] ?>">Keluar Barang</a></td>
                <?php endwhile;?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
