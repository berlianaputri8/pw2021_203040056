<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

require 'functions.php';

if(isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
		</script>";
	}else {
		echo "<script>
		alert('Registrasi Gagal'); 
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mini Registrasi</title>
</head>
<body>

<form action="" method="post">

<center>
  <div class="row">
    <div class="col s12 m6">
      <div class="card grey darken-4">
        <div class="card-content white-text">
          <span class="card-title">Registrasi</span>
          <table>
              <tr>
                  <td><label for="username">Username</label></td>
                  <td>:</td>
                  <td><input type="text" name="username"></td>
              </tr>
              <tr>
                  <td><label for="password">Password</label></td>
                  <td>:</td>
                  <td><input type="password" name="password"></td>
              </tr>
          </table>
        </div>
        <button type="submit" name="registrasi" class="waves-effect white black-text btn">Registrasi</button><br></br>
      </div>
    </div>
  </div>
</center>
</form>
    
</body>
</html>