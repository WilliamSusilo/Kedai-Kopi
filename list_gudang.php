<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi - List Gudang</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* Additional Custom Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #1a202c;
            margin-bottom: 1rem;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            padding: 0.5rem;
            border-bottom: 1px solid #cbd5e0;
            text-align: left;
        }

        th {
            background-color: #edf2f7;
            color: #4a5568;
            font-weight: 600;
        }

        td {
            background-color: #ffffff;
            color: #4a5568;
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
    </style>
</head>

<body>
    <div class="container">
        <h1>List Gudang</h1>

        <!-- Menampilkan Data dari Database -->
        <table>
            <tr>
                <th>ID Gudang</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
            <?php
            // Menampilkan Data
            $q = $db->query("SELECT * FROM gudang");
            while ($dt = $q->fetch_assoc()) :
            ?>
                <tr>
                    <td><?= $dt['id_pegawai_gudang'] ?></td>
                    <td><?= $dt['nama_pegawai_gudang'] ?></td>
                    <td><?= $dt['jabatan'] ?></td>
                    <td><?= $dt['alamat'] ?></td>
                    <td><?= $dt['nomor_telepon'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>

</html>
