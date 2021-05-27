<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }else {
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- My Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../assets/img/logoo.jpg">
    <title>MiNICo Add</title>
</head>
<body>

  <div class="navbar-fixed">
    <nav class="grey lighten-5">
      <div class="container nav-wrapper">
        <a href="#!" class="brand-logo red-text text-darken-4" style="font-family: 'Playfair Display', serif;"><b>M</b>iNI.<b>Co</b></a>
        <a href="#" class="sidenav-trigger red-text text-darken-4" data-target="slide_out"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down" style="font-family: 'Ubuntu', sans-serif;">
          <li><a href="../index.php" class="red-text text-darken-4"><b>HOME</b></a></li>
          <li><a href="produk.php" class="red-text text-darken-4"><b>PRODUCT</b></a></li>
          <li><a href="login.php" class="waves-effect red darken-4 btn">LOGIN</a></li>
          <li><a href="registrasi.php" class="waves-effect red darken-4 btn">REGISTER</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="slide_out" style="font-family: 'Ubuntu', sans-serif;">
    <li><a href="../index.php" class="red-text text-darken-4"><b>HOME</b></a></li>
    <li><a href="produk.php" class="red-text text-darken-4"><b>PRODUCT</b></a></li>
    <li><a href="login.php" class="waves-effect red darken-4 btn">LOGIN</a></li>
    <li><a href="registrasi.php" class="waves-effect red darken-4 btn">REGISTER</a></li>
  </ul>

    <div class="container">
        <h2 style="font-size: 60px; font-style: bold; font-family: 'Montserrat', sans-serif; color: black;"><i class="medium material-icons red-text text-darken-4">add_circle</i>Add Products</h2>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <ul>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Name : 
                                        <input type="text" name="nama" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Power : 
                                        <input type="text" name="power" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Acceleration : 
                                        <input type="text" name="acceleration" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Fuel Type : 
                                        <input type="text" name="fuel" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Drive :
                                        <input type="text" name="drive" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">Price :
                                        <input type="text" name="price" required>
                                    </label></b>
                                </li>
                                <li>
                                    <b><label style="font-size: 15px; font-family: 'Montserrat', sans-serif; color: black;">
                                        Picture :
                                        <input type="file" name="picture" class="picture" onchange="previewImage()">
                                    </label></b>
                                        <img src="../assets/img/noimg.png" width="120" style="display: block;" class="img-preview"><br>
                                </li>
                                <li>
                                    <div class="card-action">
                                        <button class="btn waves-effect red darken-4" type="submit" name="tambah">Add Data
                                            <i class="material-icons right">chevron_right</i>
                                        </button>
                                        <button class="btn waves-effect red darken-4" type="submit" name="action">
                                            <a href="../index.php"><i class="material-icons left">chevron_left</i>Back</a></button>
                                    </div> 
                                </li>
                                  
                            </ul>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--JavaScript-->
    <script src="../js/script.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const slide_menu = document.querySelectorAll(".sidenav")
        M.Sidenav.init(slide_menu,{});
    </script>

</body>
</html>