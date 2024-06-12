<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional Custom Styles */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 2rem;
            background-color: #f0f4f8;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        header h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            text-align: center;
            color: #1a202c;
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

        .back-button {
            display: inline-block;
            width: 120px;
            margin: 1rem auto;
            text-align: center;
            padding: 0.5rem;
            background-color: #2d3748;
            color: #ffffff;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
            box-shadow: 0 5px 15px rgba(45, 55, 72, 0.3);
        }

        .back-button:hover {
            background-color: #1a202c;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container">
        <header>
            <h3 class="text-xl md:text-2xl font-semibold">Operasional Kedai Kopi Emejing</h3>
            <hr class="my-4">
        </header>
        <h4 class="text-lg font-semibold">Menu</h4>
        <!-- Untuk Front Office -->
        <nav class="mb-4">
            <ul>
                <li><a href="list_produk.php" class="text-gray-700 hover:text-gray-900">Informasi Produk</a></li>
                <li><a href="list_frontend.php" class="text-gray-700 hover:text-gray-900">List Data Orang Front Office</a></li>
                <li><a href="request.php" class="text-gray-700 hover:text-gray-900">Aksi Permintaan Barang</a></li>
                <li><a href="list_request.php" class="text-gray-700 hover:text-gray-900">History Permintaan Barang</a></li>
            </ul>
        </nav>
        <hr class="my-4">

        <!-- Untuk Gudang -->
        <nav class="mb-4">
            <ul>
                <li><a href="list_produk.php" class="text-gray-700 hover:text-gray-900">Informasi Produk</a></li>
                <li><a href="list_gudang.php" class="text-gray-700 hover:text-gray-900">List Data Orang Gudang</a></li>
                <li><a href="action_request.php" class="text-gray-700 hover:text-gray-900">Aksi Pengeluaran Barang</a></li>
                <li><a href="list_expense.php" class="text-gray-700 hover:text-gray-900">History Pengeluaran Barang</a></li>
            </ul>
        </nav>

        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>

</html>
