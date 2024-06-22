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
    $id_pegawai_gudang = htmlspecialchars($_POST['id_pegawai_gudang']);
    $nama_pegawai_gudang = htmlspecialchars($_POST['nama_pegawai_gudang']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $nomor_telepon = htmlspecialchars($_POST['nomor_telepon']);
    $pass = htmlspecialchars($_POST['pass']);

    // MEembuat Query
    $sql = "INSERT INTO warehouse (id_pegawai_gudang, nama_pegawai_gudang, jabatan, alamat, nomor_telepon, pass) VALUE ('$id_pegawai_gudang','$nama_pegawai_gudang', '$jabatan', '$alamat', '$nomor_telepon', '$pass')";
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
            <h3>Input Data Tenaga Kerja Gudang Baru</h3>
            <hr>
        </header>

        <form action="" method="POST">
            <fieldset>
                <p>
                    <label for="id_pegawai_gudang">ID Pegawai Gudang: </label>
                    <input type="text" name="id_pegawai_gudang" id="id_pegawai_gudang" placeholder="ID Pegawai Gudang" />
                </p>
                <p>
                    <label for="nama_pegawai_gudang">Nama: </label>
                    <input type="text" name="nama_pegawai_gudang" id="nama_pegawai_gudang" placeholder="Nama Lengkap" />
                </p>
                <p>
                    <label for="jabatan">Jabatan: </label>
                    <input type="text" name="jabatan" id="jabatan" placeholder="Jabatan" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" />
                </p>
                <p>
                    <label for="nomor_telepon">Nomor Telepon: </label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon" />
                </p>
                <p>
                    <label for="pass">Password: </label>
                    <input type="text" name="pass" id="pass" placeholder="Password" />
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
