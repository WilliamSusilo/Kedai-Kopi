<?php

// configure with functions.php
require "../functions.php";

if ( isset($_POST["submit"]) ) {

  $nama = $_POST["nama"];
  $id = $_POST["id"];
  $jabatan = $_POST["jabatan"];

  $user = mysqli_query($db, "SELECT * FROM warehouse WHERE nama_pegawai_gudang = '$nama' AND id_pegawai_gudang = '$id' AND jabatan = '$jabatan'");

  if ( mysqli_num_rows($user) === 1 ) {

    $row = mysqli_fetch_assoc($user);
    $pass = $row['password'];

    echo"
    <script>
    
        alert('Password kamu: $pass');
    
    </script>
    ";
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <a href="../login_warehouse.php" style="display: block; margin-bottom: 2rem;">Back to Login Page</a>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Submit</button>
        </div>
        <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">Akun anda tidak ditemukan</p>
        <?php endif ?>
    </form>
</div>

</body>
</html>
