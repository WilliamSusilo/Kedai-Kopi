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
    $id_front_office = htmlspecialchars($_POST['id_front_office']);
    $nama = htmlspecialchars($_POST['nama']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $nomor_telepon = htmlspecialchars($_POST['nomor_telepon']);
    $pass = htmlspecialchars($_POST['pass']);

    // MEembuat Query
    $sql = "INSERT INTO front_office (id_front_office, nama, jabatan, alamat, nomor_telepon, pass) VALUE ('$id_front_office','$nama', '$jabatan', '$alamat', '$nomor_telepon', '$pass')";
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
    <title>Input Data Tenaga Kerja Front Office Baru</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <header>
            <h3>Input Data Tenaga Kerja Front Office Baru</h3>
            <hr>
        </header>

        <form action="" method="POST">
            <fieldset>
                <p>
                    <label for="id_front_office">ID Front Office: </label>
                    <input type="text" name="id_front_office" id="id_front_office" placeholder="ID Front Office" />
                </p>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" />
                </p>
                <p>
                    <label for="jabatan">Jabatan: </label>
                    <select name="jabatan" id="jabatan">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Barista">Barista</option>
                        <option value="Manager Operasional">Manager Operasional</option>
                        <option value="Shift Supervisor">Shift Supervisor</option>
                    </select>
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
