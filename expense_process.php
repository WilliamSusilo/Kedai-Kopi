<?php
include("functions.php");

if(isset($_POST['add_exp'])){

    $tanggal_pengeluaran = htmlspecialchars($_POST['tanggal_pengeluaran']);
    $jumlah_produk_keluar = htmlspecialchars($_POST['jumlah_produk_keluar']);
    $id_pegawai_gudang = htmlspecialchars($_POST['id_pegawai_gudang']);
    $kode_produk = htmlspecialchars($_POST['kode_produk']);

    $sql = "INSERT INTO expend (tanggal_pengeluaran, jumlah_produk_keluar, id_pegawai_gudang, kode_produk) VALUES ('$tanggal_pengeluaran', '$jumlah_produk_keluar', '$id_pegawai_gudang', '$kode_produk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        $sql_update = "UPDATE produk SET jumlah_produk = jumlah_produk + '$jumlah_produk_keluar' WHERE kode_produk = '$kode_produk'";
        $query_update = mysqli_query($db, $sql_update);

        if ($query_update) {
            header('Location: index.php?status=sukses');
            exit;
        } else {
            header('Location: index.php?status=gagal_update');
            exit;
        }
    } else {
        header('Location: index.php?status=gagal_insert');
        exit;
    }
    
} else {
    die("Akses dilarang...");
}
?>
