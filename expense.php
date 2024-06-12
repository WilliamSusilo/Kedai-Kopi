<?php
include("functions.php");

if (isset($_GET['transaksi_permintaan_ID'])) {
    $transaksi_permintaan_ID = $_GET['transaksi_permintaan_ID'];

    $product_demand = mysqli_query($db, "SELECT * FROM demand WHERE transaksi_permintaan_ID = '$transaksi_permintaan_ID'");
} else {
    $product_demand = [];
}

$jumlah_produk_diminta = "";
$kode_produk = "";

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
        <header>
            <h3>Form Pengeluaran Barang - Gudang</h3>
            <hr>
        </header>

        <table>
            <tr>
                <th>Tanggal Permintaan</th>
                <th>Jumlah Produk Diminta</th>
                <th>ID Front Office</th>
                <th>Kode Produk</th>
            </tr>

            <?php foreach ($product_demand as $product) : ?>
              <tr>
                  <td><?= $product["tanggal_permintaan"]; ?></td>
                  <td><?= $jumlah_produk_diminta = $product["jumlah_produk_diminta"]; ?></td>
                  <td><?= $product["id_front_office"]; ?></td>
                  <td><?= $kode_produk = $product["kode_produk"]; ?></td>
              </tr>
            <?php endforeach; ?>
        </table>

        <form action="expense_process.php" method="POST">
            <fieldset>
                <p>
                    <label for="tanggal_pengeluaran">Tanggal Pengeluaran: </label>
                    <input type="date" name="tanggal_pengeluaran" placeholder="Tanggal Pengeluaran" />
                </p>
                
                <p>
                    <label for="jumlah_produk_keluar">Jumlah Produk Dikeluarkan: </label>
                    <input type="hidden" name="jumlah_produk_keluar" value="<?= $jumlah_produk_diminta ?>" />
                    <h4><?= $jumlah_produk_diminta ?></h4>
                </p>
                <p>
                    <label for="id_pegawai_gudang">ID Gudang: </label>
                    <input type="text" name="id_pegawai_gudang" placeholder="ID Gudang" />
                </p>
                <p>
                    <label for="kode_produk">Kode Produk: </label>
                    <input type="hidden" name="kode_produk" value="<?= $kode_produk ?>" />
                    <h4><?= $kode_produk ?></h4>
                </p>
                <p>
                    <input type="submit" value="Tambah" name="add_exp" />
                </p>
            </fieldset>
        </form>
        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
