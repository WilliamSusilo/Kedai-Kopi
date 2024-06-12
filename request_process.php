<?php

include("functions.php");

// Mengecek Tombol Daftar Sudah Diklik atau Belum
if(isset($_POST['add_req'])){

    // Mengambil Data dari Formulir
    $tanggal_permintaan = htmlspecialchars($_POST['tanggal_permintaan']);
    $jumlah_produk_diminta = htmlspecialchars($_POST['jumlah_produk_diminta']);
    $id_front_office = htmlspecialchars($_POST['id_front_office']);
    $kode_produk = htmlspecialchars($_POST['kode_produk']);

    // Membuat Query
    $sql = "INSERT INTO demand (tanggal_permintaan, jumlah_produk_diminta, id_front_office, kode_produk) VALUE ('$tanggal_permintaan', '$jumlah_produk_diminta', '$id_front_office', '$kode_produk')";
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

else {
    die("Akses dilarang...");
}
?>