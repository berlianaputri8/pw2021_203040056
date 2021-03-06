<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan. silahkan login!');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo 'user gagal ditambahkan!';
    }
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
    <title>MiNiCo Registrasi</title>
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
  </ul><br>

  <div class="container row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <span class="card-title">REGISTRASI</span>
            <form action="" method="POST">
                <ul>
                    <li>
                        <label>
                            Username : 
                            <input type="text" name="username" autofocus autocomplete="off" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            Password : 
                            <input type="password" name="password1" required>
                        </label>
                    </li>
                    <li>
                        <label>
                            Konfirmasi Password : 
                            <input type="password" name="password2" required>
                        </label>
                    </li>
                    <div class="card-action">
                        <li>
                            <button type="submit" name="registrasi" class="waves-effect red darken-4 btn">registrasi</button>
                        </li>
                    </div>
                </ul>
            </form>
        </div>
        
      </div>
    </div>
  </div>

  <!--JavaScript-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const slide_menu = document.querySelectorAll(".sidenav")
        M.Sidenav.init(slide_menu,{});
    </script>

</body>
</html>