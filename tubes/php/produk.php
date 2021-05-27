<?php
require 'functions.php';

$mini = query("SELECT * FROM mini");

// ketika tombol cari diklik
if(isset($_POST['cari'])) {
    $mini = cari($_POST['keywoard']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <title>MiNICo Product</title>
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
    <li><a href="../index.php" class="red-text text-darken-4" ><b>HOME</b></a></li>
    <li><a href="produk.php" class="red-text text-darken-4"><b>PRODUCT</b></a></li>
    <li><a href="login.php" class="waves-effect red darken-4 btn">LOGIN</a></li>
    <li><a href="registrasi.php" class="waves-effect red darken-4 btn">REGISTER</a></li>
  </ul>

  <div class="container" style="font-family: 'Ubuntu', sans-serif;">
    <h3>All Product</h3>
    <form action="" method="POST">
        <input type="text" name="keywoard" autofocus placeholder="Search Product" autocomplete="off">
        <button type="submit" name="cari" class="waves-effect red darken-4 btn tombol-cari"><i class="material-icons left">search</i>Cari </button>
    </form><br>
  </div>

  <div class="container">
    <?php if(empty($mini)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>
		<?php else : ?>
    
      <div class="row">
        <?php foreach ($mini as $mn) : ?>
            <div class="col m6 s12">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/<?= $mn['picture']; ?>" class="img">
                    </div>
                    <div class="card-content">
                        <span class="card-title black-text text-darken-3"><?= $mn['nama'] ?></span>
                    </div>
                    <div class="card-action">
                        <a href="detail.php?id=<?= $mn['id']; ?>" class="waves-effect red darken-4 btn">Detail Product</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

  <footer class="page-footer grey lighten-5 center">
        <div class="container">
          <div class="row" style="font-family: 'Ubuntu', sans-serif;">
            <div class="col m4 s12">
                <div>
                <h5 class="black-text"><b>SHOPPING</b></h5>
                    <p class="grey-text text-darken-4">Shop</p>
                    <p class="grey-text text-darken-4">Payment</p>
                    <p class="grey-text text-darken-4">Contact Us</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div>
                    <h5 class="black-text"><b>ABOUT ME</b></h5>
                    <p class="grey-text text-darken-4">About Me</p>
                    <p class="grey-text text-darken-4">Our Store</p>
                    <p class="grey-text text-darken-4">Cooperation</p>
                </div>
            </div>
            <div class="col m4 s12">
                <div>
                <h5 class="black-text"><b>PAYMENT</b></h5>
                    <p class="grey-text text-darken-4">Mandiri</p>
                    <p class="grey-text text-darken-4">BRI</p>
                    <p class="grey-text text-darken-4">BNI</p>
                    <p class="grey-text text-darken-4">BCA</p>
                </div>
            </div>
        </div>
          </div>
          <div class="footer-copyright red darken-4 white-text">
            <div class="container center">
            © 2021 Copyright <b>M</b>iNI.<b>Co</b>
            </div>
          </div>
    </footer>

    <!--JavaScript-->
    <script src="../js/script.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const slide_menu = document.querySelectorAll(".sidenav")
        M.Sidenav.init(slide_menu,{});
    </script>
    
</body>
</html>