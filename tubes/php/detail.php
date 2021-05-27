<?php
if (!isset($_GET['id'])) {
    header("Location: produk.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$mini = query("SELECT * FROM mini WHERE id = $id");
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="../assets/img/logoo.jpg">
    <title>MiNICo Detail</title>
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
    <h6>Home/<?= $mini["nama"]; ?>/<b>Detail</b></h6>
      <div class="row">
        <div class="col m8 s12">
            <div class="card">
                <div class="card-image">
                    <img src="../assets/img/<?= $mini["picture"]; ?>">  
                </div>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-content">
                <b style="font-family: 'Ubuntu', sans-serif;"><h3 class="card-title"><?= $mini["nama"]; ?></h3></b>
                    <p style="font-family: 'Ubuntu', sans-serif;">Power: <?= $mini["power"]; ?></p>
                    <p style="font-family: 'Ubuntu', sans-serif;">Acceleration: <?= $mini["acceleration"]; ?></p>
                    <p style="font-family: 'Ubuntu', sans-serif;">Fuel: <?= $mini["fuel"]; ?></p>
                    <p style="font-family: 'Ubuntu', sans-serif;">Drive: <?= $mini["drive"]; ?></p>
                    <p style="font-family: 'Ubuntu', sans-serif;">Price: Rp. <?= $mini["price"]; ?></p>
                </div>
            <div class="card-action center">
                <a href="../index.php" class="waves-effect red darken-4 btn">Back</a>
                <a href="" class="waves-effect red darken-4 btn">Buy</a>
            </div>
        </div>
      </div>
  </div>

  <footer class="page-footer grey lighten-5 center">
    <div class="footer-copyright red darken-4 white-text">
      <div class="container center">
        © 2021 Copyright <b>M</b>iNI.<b>Co</b>
      </div>
    </div>
  </footer>

  <!--JavaScript-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const slide_menu = document.querySelectorAll(".sidenav")
        M.Sidenav.init(slide_menu,{});
    </script>
    
</body>
</html>