<?php 

// starting session
session_start();

// checking session
if (isset($_SESSION["login"])){
  header("Location: main.php");
  exit;
}

// configure with functions.php
require "functions.php";



if ( isset($_POST["login"]) ) {

  $loginUsername = $_POST["loginUsername"];
  $loginPassword = $_POST["loginPassword"];

  $user = mysqli_query($db, "SELECT * FROM front_office WHERE id_front_office = '$loginUsername'");
  $admin = mysqli_query($db, "SELECT * FROM front_office WHERE id_pegawai_gudang = '$loginUsername'");

  if ( mysqli_num_rows($user) === 1 ) {

    $row = mysqli_fetch_assoc($user);

    if( $loginPassword === $row['password'] ){

      $_SESSION["login"] = true;
      $_SESSION["username"] = $loginUsername;

      header("Location: main.php");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Major+Mono+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: "selector",
        theme: {
          extend: {
            fontFamily: {
              Montserrat: "Montserrat",
              Roboto: "Roboto",
              MajorMonoDisplay: "Major Mono Display",
              Karla: "Karla",
            },
          },
        },
      };
    </script>

    <style>
      
    </style>
  </head>

  <body class="bg-gray-100 h-screen flex items-center justify-center font-Karla">

    <div class="bg-white shadow-md rounded-md p-8 w-96 relative">
      <!-- Login Form -->
      <form id="loginForm" class="" action="" method="post">
        <div class="mb-4">
          <label for="loginUsername" class="block text-gray-700"
            >ID Front Office</label
          >
          <input
            type="text"
            id="loginUsername"
            name="loginUsername"
            class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500"
          />
        </div>
        <div class="mb-4">
          <label for="loginPassword" class="block text-gray-700"
            >Password</label
          >
          <input
            type="password"
            id="loginPassword"
            name="loginPassword"
            class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500"
          />
        </div>
        <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">incorrect username or password</p>
        <?php endif ?>
        <button
          type="submit" name="login"
          class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
        >
          Login
        </button>
      </form>
    </div>

  </body>
</html>