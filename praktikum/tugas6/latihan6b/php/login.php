<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}
// login
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	
  //mencocokan USERNAME dan PASSWORD
	if(mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);
		}

		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
			die;
		}

		header("Location: ../index.php");
		die;
	}
	$error = true;
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
    <title>Mini Cooper Login</title>
</head>
<body>
    
<form action="" method="post">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username atau Password salah</p>
    <?php endif; ?>

<center>
  <div class="row">
    <div class="col s12 m6">
      <div class="card grey darken-4">
        <div class="card-content white-text">
          <span class="card-title">Login</span>
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
          <div class="remember">
            <p>
                <label>
                    <input type="checkbox" name="remember"/>
                    <span>Remember Me</span>
                </label>
            </p>
          </div>
          <button type="submit" name="submit" class="waves-effect white black-text btn">Admin</button>
          <div class="registrasi">
            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</center>
</form>

</body>
</html>