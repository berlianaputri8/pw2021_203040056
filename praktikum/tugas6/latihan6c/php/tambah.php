<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan');
                document.location.href = 'admin.php';
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mini Cooper Tambah</title>
</head>
<body>

<h2><center>Form Tambah Data Mobil</center></h2>
<div class="container">
<form action="" method="post">
	<ul>
		<li>
			<label for = "name">Type</label><br>
			<input type="text" name="name" id="name" required><br><br>
		</li>
		<li>
			<label for = "power">Power</label><br>
			<input type="text" name="power" id="power" required><br><br>
		</li>
		<li>
			<label for = "acceleration">Acceleration</label><br>
			<input type="text" name="acceleration" id="acceleration" required><br><br>
		</li>
		<li>
			<label for = "fuel">Fuel Type</label><br>
			<input type="text" name="fuel" id="fuel" required><br><br>
		</li>
		<li>
			<label for = "drive">Drive</label><br>
			<input type="text" name="drive" id="drive" required><br><br>
		</li>
		<li>
			<label for = "price">Price</label><br>
			<input type="text" name="price" id="price" required><br><br>
		</li>
        <li>
			<label for = "picture">Picture</label><br>
			<input type="text" name="picture" id="picture" required><br><br>
		</li>

		<br>
		<button class="btn waves-effect brown lighten-2" type="submit" name="action">Tambah Data
			<i class="material-icons right">send</i>
		</button>
		<button class="btn waves-effect brown lighten-2" type="submit" name="action"><a href="../index.php">Kembali</a>
			<i class="material-icons right">arrow_back</i>
		</button>
		
	</ul>
    </div>
</body>
</html>