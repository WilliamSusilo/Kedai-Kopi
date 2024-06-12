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
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        header {
            margin-bottom: 20px;
        }

        h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #1a202c;
            margin: 0;
        }

        hr {
            border: none;
            border-top: 1px solid #cbd5e0;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        table th, table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #cbd5e0;
        }

        form {
            margin-top: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #4a5568;
        }

        input[type="date"],
        input[type="text"],
        input[type="number"],
        select {
            width: 98%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #cbd5e0;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #4a5568;
        }

        input[type="submit"] {
            background-color: #2d3748;
            color: #ffffff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1a202c;
        }

        .back-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #2d3748;
            color: #ffffff;
            text-decoration: none;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
            display: block;
            width: 96%;
            text-align: center;
        }

        .back-button:hover {
            background-color: #1a202c;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .container {
                margin: 20px auto;
                padding: 10px;
            }

            h3 {
                font-size: 1.2rem;
            }

            table th, table td {
                padding: 0.5rem;
            }

            input[type="submit"] {
                padding: 0.4rem 0.8rem;
            }
        }
    </style>
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
