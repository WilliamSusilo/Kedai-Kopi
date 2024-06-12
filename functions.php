<!-- <?php

$db = mysqli_connect("localhost", "root", "", "kedai_kopi");

?> -->

<?php

$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "kedai_kopi"; 

// Membuat koneksi ke database
$db = mysqli_connect($host, $username, $password, $database);

?>

