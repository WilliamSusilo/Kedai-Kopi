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
