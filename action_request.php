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

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            color: #1a202c;
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

        .expense {
            color: #2b6cb0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .expense:hover {
            color: #2c5282;
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

            h1 {
                font-size: 1.5rem;
            }

            table th, table td {
                padding: 0.5rem;
            }

            .back-button {
                padding: 0.4rem 0.8rem;
            }
        }
    </style>
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
            </tr>
            <?php endwhile;?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
