<?php
require_once 'functions.php';

// starting session
session_start();

// checking session
if (!isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

?>

<?php

include("functions.php");

// Mengecek Tombol Daftar Sudah Diklik atau Belum
if(isset($_POST['tambah'])){

    // Mengambil Data dari Formulir
    $kode_produk = htmlspecialchars($_POST['kode_produk']);
    $nama_produk = htmlspecialchars($_POST['nama_produk']);
    $jenis_produk = htmlspecialchars($_POST['jenis_produk']);
    $bentuk_produk = htmlspecialchars($_POST['bentuk_produk']);
    $satuan_produk = htmlspecialchars($_POST['satuan_produk']);
    $merk = htmlspecialchars($_POST['merk']);
    $jumlah_produk = htmlspecialchars($_POST['jumlah_produk']);
    $tingkat_kafein = htmlspecialchars($_POST['tingkat_kafein']);

    // Membuat Query
    $sql = "INSERT INTO product (kode_produk, nama_produk, jenis_produk, bentuk_produk, satuan_produk, merk, jumlah_produk, tingkat_kafein) VALUE ('$kode_produk','$nama_produk', '$jenis_produk', '$bentuk_produk', '$satuan_produk', '$merk', '$jumlah_produk', '$tingkat_kafein')";
    $query = mysqli_query($db, $sql);

    // Mengecek Apakah Query Berhasil Disimpan
    if( $query ) {
        // Apabila Berhasil Dialihkan ke Halaman index.php dengan Status = Sukses
        header('Location: index.php?status=sukses');
    } else {
        // Apabila Gagal Dialihkan ke Halaman index.php dengan Status = Gagal
        header('Location: index.php?status=gagal');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Tenaga Kerja Gudang Baru</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <header>
            <h3>Input Data Product Baru</h3>
            <hr>
        </header>

        <form action="" method="POST">
            <fieldset>
                <p>
                    <label for="kode_produk">Kode Produk: </label>
                    <input type="text" name="kode_produk" id="kode_produk" placeholder="Kode Produk" />
                </p>
                <p>
                    <label for="nama_produk">Nama Produk: </label>
                    <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk" />
                </p>
                <p>
                    <label for="jenis_produk">Jenis Produk: </label>
                    <select name="jenis_produk" id="jenis_produk">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Kopi">Kopi</option>
                        <option value="Perasa Kopi">Perasa Kopi</option>
                        <option value="Cokelat">Cokelat</option>
                        <option value="Es Krim">Es Krim</option>
                    </select>
                </p>
                <p>
                    <label for="bentuk_produk">Bentuk Produk: </label>
                    <select name="bentuk_produk" id="bentuk_produk">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Padat">Padat</option>
                        <option value="Cair">Cair</option>
                        <option value="Biji Utuh">Biji Utuh</option>
                        <option value="Bubuk Halus">Bubuk Halus</option>
                    </select>
                </p>
                <p>
                    <label for="satuan_produk">Satuan Produk: </label>
                    <select name="satuan_produk" id="satuan_produk">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Box">Box</option>
                        <option value="Botol">Botol</option>
                        <option value="Cup">Cup</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Gram">Gram</option>
                        <option value="Liter">Liter</option>
                        <option value="Mililiter">Mililiter</option>
                    </select>
                </p>
                <p>
                    <label for="merk">Merk: </label>
                    <input type="text" name="merk" id="merk" placeholder="Merk" />
                </p>
                <p>
                    <label for="jumlah_produk">Jumlah Produk: </label>
                    <input type="text" name="jumlah_produk" id="jumlah_produk" placeholder="Jumlah Produk" />
                </p>
                <p>
                    <label for="tingkat_kafein">Tingkat Kafein: </label>
                    <select name="tingkat_kafein" id="tingkat_kafein">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Rendah">Rendah</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Tinggi">Tinggi</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
                </p>
            </fieldset>
        </form>
        <!-- Tombol Back -->
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
</body>
</html>
