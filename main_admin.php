<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi</title>
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

        header h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #1a202c;
            margin-bottom: 1rem;
        }

        hr {
            border-top: 1px solid #a0aec0;
            margin: 1rem 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 0.5rem;
        }

        nav ul li a {
            color: #4a5568;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #2d3748;
        }

        .back-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #2d3748;
            color: #ffffff;
            text-decoration: none;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #1a202c;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h3>Operasional Kedai Kopi Emejing</h3>
            <hr>
        </header>
        <h4>Menu</h4>

        <!-- Untuk Gudang -->
        <nav>
            <ul>
                <li><a href="list_produk.php">Informasi Produk</a></li>
                <li><a href="list_gudang.php">List Data Orang Gudang</a></li>
                <li><a href="list_request.php">Aksi Pengeluaran Barang</a></li>
                <li><a href="list_expense.php">History Pengeluaran Barang</a></li>
            </ul>
        </nav>

        <hr>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>

</html>
