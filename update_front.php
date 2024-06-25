<?php
require_once 'functions.php';

if (isset($_GET['id_front_office'])) {
  $id_front_office = $_GET['id_front_office'];

$q = $db->query("SELECT * FROM front_office WHERE id_front_office = '$id_front_office'");

foreach ($q as $dt) :
?>

<?php
require_once 'functions.php';
if (isset($_POST['submit'])) {
  $id_front_office = $_POST['id_front_office'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $alamat = $_POST['alamat'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $pass = $_POST['pass'];

$q = $db->query("UPDATE front_office SET nama = '$nama', jabatan = '$jabatan', alamat = '$alamat', nomor_telepon = '$nomor_telepon' WHERE id_front_office = '$id_front_office'");

if ($q) {
    // Pesan Jika Data Berubah
    echo "<script>alert('Data Produk Berhasil Diubah'); window.location.href='index.php'</script>";
  } else {
    // Pesan Jika Data Gagal Diubah
    echo "<script>alert('Data Produk Gagal Diubah'); window.location.href='index.php'</script>";
  }
} else {
  // Apabila Mencoba Akses Langsung ke File Ini akan Diredirect ke Halaman Index
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Front Office</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <h2>Tampilan Ubah Data Front Office</h2>
            <form action="" method="POST">
                <?php foreach ($q as $dt) : ?>
                <input type="hidden" name="id_front_office" value="<?= $dt['id_front_office'] ?>">
                <input type="text" name="nama" value="<?= $dt['nama'] ?>" placeholder="Nama">
                <input type="text" name="jabatan" value="<?= $dt['jabatan'] ?>" placeholder="Jabatan">
                <input type="text" name="alamat" value="<?= $dt['alamat'] ?>" placeholder="Alamat">
                <input type="number" name="nomor_telepon" value="<?= $dt['nomor_telepon'] ?>" placeholder="Nomor Telepon">
                <input type="hidden" name="pass" value="<?= $dt['pass'] ?>">
                <input type="submit" name="submit" value="Ubah Data">
                <?php endforeach; ?>
            </form>
        </div>
    </body>
</html>

<?php
  endforeach;
}