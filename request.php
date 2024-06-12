<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi - Form Permintaan Barang - Front Office</title>
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

        header {
            margin-bottom: 1rem;
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
        select {
            width: 97%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #cbd5e0;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #4a5568;
        }

        select {
            width: 99%;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3e%3cpath fill='%234a5568' d='M19.334 8.666H4.666a.583.583 0 00-.5.583v8.5c0 .322.26.583.583.583h14.666a.583.583 0 00.584-.583v-8.5a.583.583 0 00-.584-.583zM7 13h10v-1.167H7V13z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position-x: calc(100% - 0.5rem);
            background-position-y: center;
            background-size: 0.75rem;
            padding-right: 2.5rem;
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
            text-align: center;
        }

        .back-button:hover {
            background-color: #1a202c;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h3>Form Permintaan Barang - Front Office</h3>
            <hr>
        </header>

        <form action="request_process.php" method="POST">
            <fieldset>
                <p>
                    <label for="tanggal_permintaan">Tanggal Permintaan: </label>
                    <input type="date" name="tanggal_permintaan" placeholder="Tanggal Permintaan" />
                </p>
                <p>
                    <label for="jumlah_produk_keluar">Jumlah Produk Diminta: </label>
                    <input type="text" name="jumlah_produk_diminta" placeholder="Jumlah Produk Diminta" />
                </p>
                <p>
                    <label for="id_front_office">ID Front Office: </label>
                    <input type="text" name="id_front_office" placeholder="ID Front Office" />
                </p>
                <p>
                    <label for="kode_produk">Kode Produk: </label>
                    <select name="kode_produk" id="kode_produk">
                        <option value="none">None</option>
                        <option value="COKELAT-01-M">COKELAT-01-M</option>
                        <option value="ES-KRIM-01-H">ES-KRIM-01-H</option>
                        <option value="KOPI-01-G">KOPI-01-G</option>
                        <option value="KOPI-02-S">KOPI-02-S</option>
                        <option value="KOPI-03-N">KOPI-03-N</option>
                        <option value="KOPI-04-NE">KOPI-04-NE</option>
                        <option value="KOPI-05-SF">KOPI-05-SF</option>
                        <option value="KOPI-06-T">KOPI-06-T</option>
                        <option value="KOPI-07-L">KOPI-07-L</option>
                        <option value="SIRUP-01-D">SIRUP-01-D</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Tambah" name="add_req" />
                </p>
            </fieldset>
        </form>
        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>

</html>
