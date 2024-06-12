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
            <h3>Operasional Kedai Kopi Emejing</h3>
            <hr>
        </header>
        <h4>Menu</h4>
        <!-- Untuk Front Office -->
        <nav>
            <ul>
                <li><a href="list_produk.php">Informasi Produk</a></li>
                <li><a href="list_frontend.php">List Data Orang Front Office</a></li>
                <li><a href="request.php">Aksi Permintaan Barang</a></li>
                <li><a href="list_request.php">History Permintaan Barang</a></li>
            </ul>
        </nav>
        <hr>

        <!-- Untuk Gudang -->
        <nav>
            <ul>
                <li><a href="list_produk.php">Informasi Produk</a></li>
                <li><a href="list_gudang.php">List Data Orang Gudang</a></li>
                <li><a href="action_request.php">Aksi Pengeluaran Barang</a></li>
                <li><a href="list_expense.php">History Pengeluaran Barang</a></li>
            </ul>
        </nav>
         <!-- Tombol Back -->
         <a href="javascript:history.back()" class="back-button">Back</a>
    </div>

    <script>
        // Mengatur Tampilan Sementara
        document.addEventListener('DOMContentLoaded', function() {
            var notification = document.getElementById('notification');
            if (notification) {
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 5000); // Tampilkan Selama 5 Detik
            }
        });
    </script>
</body>
</html>
